Grayscale-Warp7
===============

Default overwrite files for better workflow.

# Notes
To enable posts' column view, edit _posts.php, line 10:
> $colcount = is_home() || is_archive() ? $this['config']->get('multicolumns', 1) : 1;

# Change Log
7 Jan 2014
- Updated SCSS files and remove obsolete prefixes
- Added .scss-lint.yml as code styleguide
- Defaults are set to promote mobile first development
- Start initiation to use rem as size units
- Imported to BitBucket

15 Oct 2014
- Initial commit with file structure
- Base _common.scss
- Added functions.php for Grayscale branding on login page

NO HI!