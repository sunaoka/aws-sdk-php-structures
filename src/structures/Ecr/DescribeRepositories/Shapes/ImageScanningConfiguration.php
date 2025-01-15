<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeRepositories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $scanOnPush
 */
class ImageScanningConfiguration extends Shape
{
    /**
     * @param array{scanOnPush?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
