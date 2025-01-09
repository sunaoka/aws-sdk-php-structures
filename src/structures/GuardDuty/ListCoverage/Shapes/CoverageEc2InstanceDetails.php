<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $InstanceType
 * @property string $ClusterArn
 * @property AgentDetails $AgentDetails
 * @property 'AUTO_MANAGED'|'MANUAL'|'DISABLED' $ManagementType
 */
class CoverageEc2InstanceDetails extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     InstanceType?: string,
     *     ClusterArn?: string,
     *     AgentDetails?: AgentDetails,
     *     ManagementType?: 'AUTO_MANAGED'|'MANUAL'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
