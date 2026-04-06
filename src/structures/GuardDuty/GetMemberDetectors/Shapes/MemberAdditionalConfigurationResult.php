<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetMemberDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EKS_ADDON_MANAGEMENT'|'ECS_FARGATE_AGENT_MANAGEMENT'|'EC2_AGENT_MANAGEMENT'|null $Name
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class MemberAdditionalConfigurationResult extends Shape
{
    /**
     * @param array{
     *     Name?: 'EKS_ADDON_MANAGEMENT'|'ECS_FARGATE_AGENT_MANAGEMENT'|'EC2_AGENT_MANAGEMENT'|null,
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
