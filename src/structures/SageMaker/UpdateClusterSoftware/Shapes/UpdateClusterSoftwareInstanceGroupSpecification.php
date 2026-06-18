<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateClusterSoftware\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceGroupName
 * @property string|null $ImageReleaseVersion
 */
class UpdateClusterSoftwareInstanceGroupSpecification extends Shape
{
    /**
     * @param array{
     *     InstanceGroupName: string,
     *     ImageReleaseVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
