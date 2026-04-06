<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DescribeOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EKS_ADDON_MANAGEMENT'|'ECS_FARGATE_AGENT_MANAGEMENT'|'EC2_AGENT_MANAGEMENT'|null $Name
 * @property 'NEW'|'NONE'|'ALL'|null $AutoEnable
 */
class OrganizationAdditionalConfigurationResult extends Shape
{
    /**
     * @param array{
     *     Name?: 'EKS_ADDON_MANAGEMENT'|'ECS_FARGATE_AGENT_MANAGEMENT'|'EC2_AGENT_MANAGEMENT'|null,
     *     AutoEnable?: 'NEW'|'NONE'|'ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
