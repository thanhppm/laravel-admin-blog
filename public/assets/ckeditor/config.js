/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'vi';
	config.uiColor = '#DDDDDD';
    config.height = 500;
    config.filebrowserBrowseUrl = "../../../assets/ckfinder/ckfinder.html";
    config.filebrowserImageBrowseUrl = "../../../assets/ckfinder/ckfinder.html?type=Images";
    config.filebrowserFlashBrowseUrl = "../../../assets/ckfinder/ckfinder.html?type=Flash";
    // config.filebrowserUploadUrl = "../public/assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files";
    // config.filebrowserImageUploadUrl = "../public/assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images";
    // config.filebrowserFlashUploadUrl = "../public/assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash";   
    config.toolbarCanCollapse = true;
};
