<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NexGuardFileMarkerSettings $NexguardFileMarkerSettings
 */
class PartnerWatermarking extends Shape
{
    /**
     * @param array{NexguardFileMarkerSettings?: NexGuardFileMarkerSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
