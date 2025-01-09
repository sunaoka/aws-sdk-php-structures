<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CoverageEksClusterDetails $EksClusterDetails
 * @property 'EKS'|'ECS'|'EC2' $ResourceType
 * @property CoverageEcsClusterDetails $EcsClusterDetails
 * @property CoverageEc2InstanceDetails $Ec2InstanceDetails
 */
class CoverageResourceDetails extends Shape
{
    /**
     * @param array{
     *     EksClusterDetails?: CoverageEksClusterDetails,
     *     ResourceType?: 'EKS'|'ECS'|'EC2',
     *     EcsClusterDetails?: CoverageEcsClusterDetails,
     *     Ec2InstanceDetails?: CoverageEc2InstanceDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
