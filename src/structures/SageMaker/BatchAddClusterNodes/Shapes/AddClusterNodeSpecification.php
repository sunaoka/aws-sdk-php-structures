<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchAddClusterNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceGroupName
 * @property int<1, 50> $IncrementTargetCountBy
 */
class AddClusterNodeSpecification extends Shape
{
    /**
     * @param array{
     *     InstanceGroupName: string,
     *     IncrementTargetCountBy: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
