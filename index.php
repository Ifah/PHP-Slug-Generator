<?php
function createSlug($slug){
	/*
	Steps
	Remove anything that is not letters, numbers, spaces, hypens
	Remove spaces and duplicate hypens
	Trim the left and right, removing any left over hypens
*/
	$lettersNumbersSpacesHypens = '/[^\-\s\pN\pL]+/u';
	$spacesDuplicateHypens = '/[\-\s]+/';

	$slug = preg_replace($lettersNumbersSpacesHypens, '', mb_strtolower($slug, 'UTF-8'));
	$slug = preg_replace($spacesDuplicateHypens, '-', $slug);
	$slug = trim($slug, '-');

	return $slug;

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SEO URL</title>
	<meta charset="UTF-8">
</head>
<body>
	<?php echo createSlug(' This is ---- an     article      ^***&%$#@ 9 title**  '); ?>
</body>
</html>