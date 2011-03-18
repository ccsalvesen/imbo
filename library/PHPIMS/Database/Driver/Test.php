<?php
/**
 * PHPIMS
 *
 * Copyright (c) 2011 Christer Edvartsen <cogo@starzinger.net>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to
 * deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or
 * sell copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * * The above copyright notice and this permission notice shall be included in
 *   all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 *
 * @package PHPIMS
 * @subpackage DatabaseDriver
 * @author Christer Edvartsen <cogo@starzinger.net>
 * @copyright Copyright (c) 2011, Christer Edvartsen
 * @license http://www.opensource.org/licenses/mit-license MIT License
 * @link https://github.com/christeredvartsen/phpims
 */

/**
 * Test based database driver
 *
 * This database driver is used for testing purposes only
 *
 * @package PHPIMS
 * @subpackage DatabaseDriver
 * @author Christer Edvartsen <cogo@starzinger.net>
 * @copyright Copyright (c) 2011, Christer Edvartsen
 * @license http://www.opensource.org/licenses/mit-license MIT License
 * @link https://github.com/christeredvartsen/phpims
 * @codeCoverageIgnore
 */
class PHPIMS_Database_Driver_Test extends PHPIMS_Database_Driver_Abstract {
    /**
     * The next result from the isValidHash static method
     *
     * @var boolean
     */
    static public $nextValidHashResult = true;

    /**
     * Method to check if an image hash is valid for this driver
     *
     * @param string $hash The hash to check
     * @return boolean Returns true if valid, false otherwise
     */
    static public function isValidHash($hash) {
        return self::$nextValidHashResult;
    }

    /**
     * Insert a new image
     *
     * This method will insert a new image into the database. The method should update the $image
     * object if successfull by setting the newly created ID. On errors throw exceptions that
     * extends PHPIMS_Database_Exception.
     *
     * @param PHPIMS_Image $image The image object to insert
     * @return boolean Returns true on success or false on failure
     * @throws PHPIMS_Database_Exception
     */
    public function insertNewImage(PHPIMS_Image $image) {
        return true;
    }

    /**
     * Delete an image from the database
     *
     * @param string $hash The unique ID of the image to delete
     * @return boolean Returns true on success or false on failure
     * @throws PHPIMS_Database_Exception
     */
    public function deleteImage($hash) {
        return true;
    }

    /**
     * Edit an image
     *
     * @param string $hash The unique ID of the image to edit
     * @param array $metadata An array with metadata
     * @return boolean Returns true on success or false on failure
     * @throws PHPIMS_Database_Exception
     */
    public function editImage($hash, array $metadata) {
        return true;
    }

    /**
     * Get all metadata associated with an image
     *
     * @param string $hash The unique ID of the image to get metadata from
     * @return array Returns the metadata as an array
     * @throws PHPIMS_Database_Exception
     */
    public function getImageMetadata($hash) {
        return array(
            'foo' => 'bar',
            'bar' => 'foo',
        );
    }

    /**
     * Get the mime-type of an image
     *
     * @param string $hash The unique ID of the image to get the mime-type of
     * @return string The mime type that can be placed in a Content-Type header
     * @throws PHPIMS_Database_Exception
     */
    public function getImageMimetype($hash) {
        return 'image/png';
    }

    /**
     * Get the file size of an image
     *
     * @param string $hash The unique ID of the image to get the size of
     * @return int The size of the file in bytes
     * @throws PHPIMS_Database_Exception
     */
    public function getImageSize($hash) {
        return 1337;
    }
}