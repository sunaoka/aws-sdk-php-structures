<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeModelPackagingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GreengrassOutputDetails|null $Greengrass
 */
class ModelPackagingOutputDetails extends Shape
{
    /**
     * @param array{Greengrass?: GreengrassOutputDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
