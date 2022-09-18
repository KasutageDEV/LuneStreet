	<div class="chat" id="chat">
		<div class="chat__header">
			Chat en direct
		</div>

		<div class="chat__content">
			<div class="chat__message">
				<form method="POST" action="">
					<input type="hidden" name="message_id" value="1">
					<button class="chat__delete"><i class="fi fi-rr-cross-small"></i></button>
				</form>
				<div class="chat__message-profil">
					<img src="https://avatars.dicebear.com/api/adventurer-neutral/LS-0000000001.svg" class="chat__message-avatar">
					<div class="chat__message-infos">
						<h4>LS-0000000001</h4>
						<h5>Le 08/09 à 01:56</h5>
					</div>
					<div class="chat__message-badge admin">ADMIN</div>
				</div>
				<div class="chat__message-text">
					Lorem ipsum deydgeyfd uyegdeuzbdfuehf efdjshdf hfrh hfrhgrfgfhbfvhsdrfv rhfbrs. Lorem ipsum deydgeyfd uyegdeuzbdfuehf efdjshdf hfrh hfrhgrfgfhbfvhsdrfv rhfbrs
				</div>
			</div>
		</div>

		<button type="button" class="chat__addMessage" id="OpenModal">Envoyer un message</button>

		<div id="ChatModal">
			<div class="chatModal">
				<button type="button" class="closeModal" id="CloseModal"><i class="fi fi-rr-cross-small"></i></button>
				<div class="chatModal__box">
					<form method="POST" action="" id="FormModal">
						<textarea id="ChatModalInput" placeholder="Message..."></textarea>
						<button type="submit">Envoyer</button>
					</form>
				</div>
			</div>
		</div>
	</div>