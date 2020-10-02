<?php

use SilverStripe\Assets\Folder;
use SilverStripe\Assets\Image;
use SilverStripe\Control\Director;
use SilverStripe\Core\Config\Config;
use SilverStripe\ORM\DataExtension;

/**
 * Adds helper methods to the core {@link File} object
 *
 * @package  unclecheese/dropzone
 * @author  Uncle Cheese <unclecheese@leftandmain.com>
 */
class DropzoneFile extends DataExtension {


    /**
     * Helper method for determining if this is an Image
     *
     * @return  boolean
     */
    public function IsImage() {
        return $this->owner instanceof Image;
    }

    /**
     * Gets a filename based on the extension and the size
     *
     * @param  string $ext  The extension of the file, e.g. "pdf"
     * @param  int $size The size of the image
     * @return string
     */
    protected function getFilenameForType($ext, $size) {
        return sprintf(
                    'resources/%s/images/file-icons/%spx/%s.png',
                    DROPZONE_DIR,
                    $size,
                    strtolower($ext)
                );
    }
}
