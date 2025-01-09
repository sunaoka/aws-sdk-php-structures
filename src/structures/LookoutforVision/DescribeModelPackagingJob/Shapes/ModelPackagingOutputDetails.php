<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeModelPackagingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GreengrassOutputDetails $Greengrass
 */
class ModelPackagingOutputDetails extends Shape
{
    /**
     * @param array{Greengrass?: GreengrassOutputDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
