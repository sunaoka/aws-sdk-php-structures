<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CapacitySizeConfig $MaximumBatchSize
 * @property CapacitySizeConfig|null $RollbackMaximumBatchSize
 */
class RollingDeploymentPolicy extends Shape
{
    /**
     * @param array{
     *     MaximumBatchSize: CapacitySizeConfig,
     *     RollbackMaximumBatchSize?: CapacitySizeConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
