<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeModelPackagingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GreengrassConfiguration $Greengrass
 */
class ModelPackagingConfiguration extends Shape
{
    /**
     * @param array{Greengrass: GreengrassConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
