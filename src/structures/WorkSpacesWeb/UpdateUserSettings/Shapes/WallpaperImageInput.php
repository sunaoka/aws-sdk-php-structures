<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $blob
 * @property string|null $s3Uri
 */
class WallpaperImageInput extends Shape
{
    /**
     * @param array{
     *     blob?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     s3Uri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
