<!DOCTYPE html PUBLIC>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Painel de controle</title>
		<!--<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css" type="text/css" />-->
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/base/jquery-ui.css" type="text/css" media="all" />
		<link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/css" media="all" />
		<style>
			body { font-size: 62.5%; }
			label, input { display: block; }
			input.text { margin-bottom: 12px; width: 95%; padding: .4em; }
			fieldset { padding: 0; border: 0; margin-top: 25px; }
			h1 { font-size: 1.2em; margin: .6em 0; }
			div#users-contain { width: 350px; margin: 20px 0; }
			div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
			div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
			.ui-dialog .ui-state-error { padding: .3em; }
			.validateTips { border: 1px solid transparent; padding: 0.3em; }
			#dialog-form {
				display: none;
			}
		</style>
	</head>
	
	<body>
		
		<div class="demo">
			
			<div class="ui-widget">
				<label for="tags">Tags: </label>
				<input id="tags">
			</div>
			
			<div id="tabs">
				<ul>
					<li><a href="#tabs-1">Nunc tincidunt</a></li>
					<li><a href="#tabs-2">Proin dolor</a></li>
					<li><a href="#tabs-3">Aenean lacinia</a></li>
				</ul>
				
				<div id="tabs-1">
					<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
				</div>
				
				<div id="tabs-2">
					<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
				</div>
				
				<div id="tabs-3">
					<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
					<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
				</div>
			</div>
			
			<div id="dialog-form" title="Criar novo usuário">
				<p class="validateTips">All form fields are required.</p>
				<form>
					<fieldset>
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all" />
						<label for="email">Email</label>
						<input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all" />
						<label for="password">Password</label>
						<input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all" />
					</fieldset>
				</form>
			</div>
			
			<div id="users-contain" class="ui-widget">
				<h1>Usuários:</h1>
				<table id="users" class="ui-widget ui-widget-content">
					<thead>
						<tr class="ui-widget-header ">
							<th>Name</th>
							<th>Email</th>
							<th>Password</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Plastic</td>
							<td>plastic@gmail.com</td>
							<td>mktvirtual</td>
						</tr>
						<tr>
							<td>John Doe</td>
							<td>john.doe@example.com</td>
							<td>johndoe1</td>
						</tr>
					</tbody>
				</table>
			</div>
			
			<button id="create-user">Adicionar Usuário</button>
			
		</div>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			
			// example for autocomplete
			$( function() {
				var availableTags = ["c++", "java", "php", "coldfusion", "javascript", "asp", "ruby", "python", "c", "scala", "groovy", "haskell", "perl"];
				$("#tags").autocomplete({
					source: availableTags
				});
			});
			
			// example for tabs
			$( function() {
				$("#tabs").tabs().find(".ui-tabs-nav").sortable({axis:'x'});
			});
			
			// example for dialog form
			$( function() {
				
				$("#dialog").dialog("destroy");
				
				var name = $("#name"),
					email = $("#email"),
					password = $("#password"),
					allFields = $([]).add(name).add(email).add(password),
					tips = $(".validateTips");
				
				function updateTips(t) 
				{
					tips
						.text(t)
						.addClass('ui-state-highlight');
					setTimeout( function() {
						tips.removeClass('ui-state-highlight', 1500);
					}, 500);
				}
				
				function checkLength(o,n,min,max) 
				{
					if ( o.val().length > max || o.val().length < min ) {
						o.addClass('ui-state-error');
						updateTips("Length of " + n + " must be between "+min+" and "+max+".");
						return false;
					} else {
						return true;
					}
				}
				
				function checkRegexp(o,regexp,n) 
				{
					if ( !( regexp.test( o.val() ) ) ) {
						o.addClass('ui-state-error');
						updateTips(n);
						return false;
					} else {
						return true;
					}
				}
				
				$("#dialog-form").dialog({
					autoOpen: false,
					height: 300,
					width: 350,
					modal: true,
					
					buttons: {
						
						'Adicionar' : function() 
						{
							var bValid = true;
							
							allFields.removeClass('ui-state-error');
							
							bValid = bValid && checkLength(name, "username", 3, 16);
							bValid = bValid && checkLength(email, "email", 6, 80);
							bValid = bValid && checkLength(password, "password", 5, 16);
							
							bValid = bValid && checkRegexp(name,/^[a-z]([0-9a-z_])+$/i, "Username may consist of a-z, 0-9, underscores, begin with a letter.");
							// From jquery.validate.js (by joern), contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
							bValid = bValid && checkRegexp(email,/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i,"eg. ui@jquery.com");
							
							bValid = bValid && checkRegexp(password,/^([0-9a-zA-Z])+$/,"Password field only allow : a-z 0-9");
							
							if (bValid) {
								$('#users tbody').append('<tr>' +
									'<td>' + name.val() + '</td>' + 
									'<td>' + email.val() + '</td>' + 
									'<td>' + password.val() + '</td>' +
									'</tr>'); 
								$(this).dialog('close');
							}
						},
						
						'Cancelar': function() {
							$(this).dialog('close');
						}
					},
					close: function() {
						allFields.val('').removeClass('ui-state-error');
					}
				});
				
				$('#create-user')
					.button()
					.click( function() {
						$('#dialog-form').dialog('open');
					}
				);
			});
			
		</script>
	</body>
</html>