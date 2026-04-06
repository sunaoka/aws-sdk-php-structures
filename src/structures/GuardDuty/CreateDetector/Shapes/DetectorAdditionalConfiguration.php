<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EKS_ADDON_MANAGEMENT'|'ECS_FARGATE_AGENT_MANAGEMENT'|'EC2_AGENT_MANAGEMENT'|null $Name
 * @property 'ENABLED'|'DISABLED'|null $Status
 */
class DetectorAdditionalConfiguration extends Shape
{
    /**
     * @param array{
     *     Name?: 'EKS_ADDON_MANAGEMENT'|'ECS_FARGATE_AGENT_MANAGEMENT'|'EC2_AGENT_MANAGEMENT'|null,
     *     Status?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
