<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CoverageEksClusterDetails|null $EksClusterDetails
 * @property CoverageEcsClusterDetails|null $EcsClusterDetails
 * @property CoverageEc2InstanceDetails|null $Ec2InstanceDetails
 * @property 'EKS'|'ECS'|'EC2'|null $ResourceType
 */
class CoverageResourceDetails extends Shape
{
    /**
     * @param array{
     *     EksClusterDetails?: CoverageEksClusterDetails|null,
     *     EcsClusterDetails?: CoverageEcsClusterDetails|null,
     *     Ec2InstanceDetails?: CoverageEc2InstanceDetails|null,
     *     ResourceType?: 'EKS'|'ECS'|'EC2'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
