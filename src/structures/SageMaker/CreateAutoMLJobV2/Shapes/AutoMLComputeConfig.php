<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EmrServerlessComputeConfig|null $EmrServerlessComputeConfig
 */
class AutoMLComputeConfig extends Shape
{
    /**
     * @param array{EmrServerlessComputeConfig?: EmrServerlessComputeConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
