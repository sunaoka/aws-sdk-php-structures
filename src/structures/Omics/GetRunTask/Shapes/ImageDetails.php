<?php

namespace Sunaoka\Aws\Structures\Omics\GetRunTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $image
 * @property string|null $imageDigest
 * @property string|null $sourceImage
 */
class ImageDetails extends Shape
{
    /**
     * @param array{
     *     image?: string|null,
     *     imageDigest?: string|null,
     *     sourceImage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
