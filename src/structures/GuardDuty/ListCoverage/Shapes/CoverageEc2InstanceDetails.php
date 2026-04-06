<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property string|null $InstanceType
 * @property string|null $ClusterArn
 * @property AgentDetails|null $AgentDetails
 * @property 'AUTO_MANAGED'|'MANUAL'|'DISABLED'|null $ManagementType
 */
class CoverageEc2InstanceDetails extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     InstanceType?: string|null,
     *     ClusterArn?: string|null,
     *     AgentDetails?: AgentDetails|null,
     *     ManagementType?: 'AUTO_MANAGED'|'MANUAL'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
