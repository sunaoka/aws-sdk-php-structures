<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterName
 * @property FargateDetails $FargateDetails
 * @property ContainerInstanceDetails $ContainerInstanceDetails
 */
class CoverageEcsClusterDetails extends Shape
{
    /**
     * @param array{
     *     ClusterName?: string,
     *     FargateDetails?: FargateDetails,
     *     ContainerInstanceDetails?: ContainerInstanceDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
