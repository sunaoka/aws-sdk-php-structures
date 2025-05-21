<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateClusterSoftware\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceGroupName
 */
class UpdateClusterSoftwareInstanceGroupSpecification extends Shape
{
    /**
     * @param array{InstanceGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
