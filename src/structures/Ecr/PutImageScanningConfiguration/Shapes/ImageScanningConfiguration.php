<?php

namespace Sunaoka\Aws\Structures\Ecr\PutImageScanningConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $scanOnPush
 */
class ImageScanningConfiguration extends Shape
{
    /**
     * @param array{scanOnPush?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
