<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CoverageEksClusterDetails|null $EksClusterDetails
 * @property 'EKS'|'ECS'|'EC2'|null $ResourceType
 * @property CoverageEcsClusterDetails|null $EcsClusterDetails
 * @property CoverageEc2InstanceDetails|null $Ec2InstanceDetails
 */
class CoverageResourceDetails extends Shape
{
    /**
     * @param array{
     *     EksClusterDetails?: CoverageEksClusterDetails|null,
     *     ResourceType?: 'EKS'|'ECS'|'EC2'|null,
     *     EcsClusterDetails?: CoverageEcsClusterDetails|null,
     *     Ec2InstanceDetails?: CoverageEc2InstanceDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
