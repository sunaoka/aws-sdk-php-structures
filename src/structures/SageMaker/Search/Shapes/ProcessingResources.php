<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProcessingClusterConfig $ClusterConfig
 */
class ProcessingResources extends Shape
{
    /**
     * @param array{ClusterConfig: ProcessingClusterConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
