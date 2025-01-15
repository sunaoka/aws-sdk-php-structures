<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterName
 * @property FargateDetails|null $FargateDetails
 * @property ContainerInstanceDetails|null $ContainerInstanceDetails
 */
class CoverageEcsClusterDetails extends Shape
{
    /**
     * @param array{
     *     ClusterName?: string|null,
     *     FargateDetails?: FargateDetails|null,
     *     ContainerInstanceDetails?: ContainerInstanceDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
