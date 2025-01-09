<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EmrServerlessComputeConfig $EmrServerlessComputeConfig
 */
class AutoMLComputeConfig extends Shape
{
    /**
     * @param array{EmrServerlessComputeConfig?: EmrServerlessComputeConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
