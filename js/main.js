VK.Widgets.CommunityMessages("vk_community_messages", 171148664, {expanded: "1",tooltipButtonText: "Есть вопрос?"});

$(document).ready(function() {
	$(".form").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			$(".form").trigger("reset");
		});
		return false;
	});
});
