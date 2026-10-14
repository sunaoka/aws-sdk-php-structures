<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetCustomDetectionRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MinAgentVersion
 */
class DetectionRuleEcsFargateRequirements extends Shape
{
    /**
     * @param array{MinAgentVersion?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
