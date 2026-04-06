<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'image/png'|'image/jpeg'|'image/x-icon' $mimeType
 * @property string $fileExtension
 * @property \Aws\Api\DateTimeResult $lastUploadTimestamp
 */
class ImageMetadata extends Shape
{
    /**
     * @param array{
     *     mimeType: 'image/png'|'image/jpeg'|'image/x-icon',
     *     fileExtension: string,
     *     lastUploadTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
