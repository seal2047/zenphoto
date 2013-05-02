					<form id="commentform" action="#commentform" method="post">
						<input type="hidden" name="comment" value="1" />
						<input type="hidden" name="remember" value="1" />
						<?php
						printCommentErrors();
						$required = false;
						?>
							<p style="display:none;">
								<label for="username">Username:</td>
								<input type="text" id="username" name="username" size="22" value="" /></td>
							</p>
							<?php
							if ($req = getOption('comment_name_required')) {
								if ($req == 'required') {
									$star = "*";
									$required = true;
								} else {
									$star = '';
								}
								?>
								<p>
										<label for="name"><?php printf(gettext("Name%s:"),$star); ?></label>
										<?php
										if ($disabled['name']) {
											?>
											<span class="disabled_input" style="background-color:LightGray;color:black;">
												<label for="name"><?php echo html_encode($stored['name']); ?></label>
												<input type="hidden" id="name" name="name" value="<?php echo html_encode($stored['name']);?>" />
											</span>
											<?php
										} else {
											?>
											<input type="text" id="name" name="name" size="22" value="<?php echo html_encode($stored['name']);?>" class="inputbox" />
											<?php
										}
										?>
									</p>
									
								<?php
									if (getOption('comment_form_anon') && !$disabled['anon']) {
										?>
										<p>
										<label for="anon"> (<?php echo gettext("<em>anonymous</em>"); ?>)</label>
										<input type="checkbox" name="anon" id="anon" value="1"<?php if ($stored['anon']) echo ' checked="checked"'; echo $disabled['anon']; ?> />
										</p>
										<?php
									}
							}
							if ($req = getOption('comment_email_required')) {
								if ($req == 'required') {
									$star = "*";
									$required = true;
								} else {
									$star = '';
								}
								?>
								<p>
									<label for="email"><?php printf(gettext("%sE-Mail:"),$star); ?></label>
									<?php
									if ($disabled['email']) {
										?>
										<span class="disabled_input" style="background-color:LightGray;color:black;">
											<?php
											echo html_encode($stored['email']);
											?>
											<input type="hidden" id="email" name="email" value="<?php echo html_encode($stored['email']);?>" />
										</span>
										<?php
									} else {
										?>
										<input type="text" id="email" name="email" size="22" value="<?php echo html_encode($stored['email']);?>" class="inputbox" />
										<?php
									}
									?>
								</p>
							<?php
							}
							if ($req = getOption('comment_web_required')) {
								if ($req == 'required') {
									$star = "*";
									$required = true;
								} else {
									$star = '';
								}
								?>
							<p>
									<label for="website"><?php printf(gettext("%sSite:"),$star); ?></label>
									<?php
									if ($disabled['website']) {
										?>
										<span class="disabled_input" style="background-color:LightGray;color:black;">
											<?php echo html_encode($stored['website']); ?>
											<input type="hidden" id="website" name="website" value="<?php echo html_encode($stored['website']);?>" />
										</span>
										<?php
									} else {
										?>
										<input type="text" id="website" name="website" size="22" value="<?php echo html_encode($stored['website']);?>" class="inputbox" />
										<?php
									}
									?>
							</p>
							<?php
							}
							if ($req = getOption('comment_form_addresses')) {
								if ($req == 'required') {
									$star = '*';
									$required = true;
								} else {
									$star = '';
								}
								?>
								<p>
										<label for="comment_form_street"><?php printf(gettext('%sStreet:'),$star); ?></label>
										<?php
											if ($disabled['street']) {
												?>
												<span class="disabled_input" style="background-color:LightGray;color:black;">
													<?php echo html_encode($stored['street']); ?>
														<input type="hidden" id="comment_form_street-0" name="0-comment_form_street" value="<?php echo html_encode($stored['street']);?>" />
												</span>
												<?php
											} else {
												?>
												<input type="text" name="0-comment_form_street" id="comment_form_street" class="inputbox" size="22" value="<?php echo html_encode($stored['street']); ?>" />
												<?php
											}
										?>
								</p>
								<p>
									<label for="comment_form_city"><?php printf(gettext('%sCity:'),$star); ?></label>
										<?php
										if ($disabled['city']) {
											?>
											<span class="disabled_input"  style="background-color:LightGray;color:black;">
												<?php
												echo html_encode($stored['city']);
												?>
												<input type="hidden" id="comment_form_city-0" name="0-comment_form_city" value="<?php echo html_encode($stored['city']);?>" />
											</span>
											<?php
										} else {
											?>
											<input type="text" name="0-comment_form_city" id="comment_form_city" class="inputbox" size="22" value="<?php echo html_encode($stored['city']); ?>" />
											<?php
										}
										?>
								</p>
								<p>
									<label for"comment_form_state-0">><?php printf(gettext('%sState:'),$star); ?></label>
										<?php
										if ($disabled['state']) {
											?>
											<span class="disabled_input" style="background-color:LightGray;color:black;">
												<?php
												echo html_encode($stored['state']);
												?>
												<input type="hidden" name="0-comment_form_state" id="comment_form_state-0" value="<?php echo html_encode($stored['state']);?>" />
											</span>
											<?php
										} else {
											?>
											<input type="text" name="0-comment_form_state" id="comment_form_state-0" class="inputbox" size="22" value="<?php echo html_encode($stored['state']); ?>" />
											<?php
										}
										?>
								</p>
								<p>
									<label for"0-comment_form_country"><?php printf(gettext('%sCountry:'),$star); ?></label>
									<?php
										if ($disabled['country']) {
											?>
											<span class="disabled_input"  style="background-color:LightGray;color:black;">
												<?php
												echo html_encode($stored['country']);
												?>
												<input type="hidden" id="0-comment_form_country" name="0-comment_form_country" value="<?php echo html_encode($stored['country']);?>" />
											</span>
											<?php
										} else {
											?>
											<input type="text" name="0-comment_form_country" id="comment_form_country-0" class="inputbox" size="22" value="<?php echo html_encode($stored['country']); ?>" />
											<?php
										}
										?>
								</p>
								<p>
									<label for="comment_form_postal-0"><?php printf(gettext('%sPostal code:'),$star); ?></label>
										<?php
										if ($disabled['postal']) {
											?>
											<span class="disabled_input"  style="background-color:LightGray;color:black;">
												<?php
												echo html_encode($stored['postal']);
												?>
												<input type="hidden" name="0-comment_form_postal" value="<?php echo html_encode($stored['postal']);?>" />
											</span>
											<?php
										} else {
											?>
											<input type="text" id="comment_form_postal-0" name="0-comment_form_postal" class="inputbox" size="22" value="<?php echo html_encode($stored['postal']); ?>" />
											<?php
										}
										?>
								</p>
							<?php
							}
							if($required) {
								?>
								<p><?php echo gettext('*Required fields'); ?></p>
								<?php
							}
							if (commentFormUseCaptcha()) {
 								$captcha = $_zp_captcha->getCaptcha();
 								?>
 								<p>
	 								<label for="code"><?php echo gettext("Enter CAPTCHA:"); ?></label>
	 								<?php if (isset($captcha['html']) && isset($captcha['input'])) echo $captcha['html']; 	
										if (isset($captcha['input'])) {
											echo $captcha['input'];
										} else {
										 if (isset($captcha['html'])) echo $captcha['html'];
										}
										if (isset($captcha['hidden'])) echo $captcha['hidden'];
										?>
	 							</p>
							<?php
							}
							if (getOption('comment_form_private') && !$disabled['private']) {
								?>
								<p>
									<label for="private"><?php echo gettext("Private comment (don't publish)"); ?></label>
									<input type="checkbox" name="private" value="1"<?php if ($stored['private']) echo ' checked="checked"'; ?> />
								</p>
								<?php
							}
							?>
						<textarea name="comment" rows="6" cols="42" class="textarea_inputbox"><?php echo $stored['comment']; echo $disabled['comment']; ?></textarea>
						<input type="submit" class="pushbutton"  value="<?php echo gettext('Add Comment'); ?>" />
					</form>
