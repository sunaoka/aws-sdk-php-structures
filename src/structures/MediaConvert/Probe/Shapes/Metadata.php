<?php

namespace Sunaoka\Aws\Structures\MediaConvert\Probe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ETag
 * @property int|null $FileSize
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property string|null $MimeType
 */
class Metadata extends Shape
{
    /**
     * @param array{
     *     ETag?: string|null,
     *     FileSize?: int|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null,
     *     MimeType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
