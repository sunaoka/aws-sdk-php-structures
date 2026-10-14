<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetCustomDetectionRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectionRuleRuntimePlatforms|null $Platforms
 */
class DetectionRuleRuntimeMonitoringDetails extends Shape
{
    /**
     * @param array{Platforms?: DetectionRuleRuntimePlatforms|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
