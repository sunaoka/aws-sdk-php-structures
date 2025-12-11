<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NexGuardFileMarkerSettings|null $NexguardFileMarkerSettings
 */
class PartnerWatermarking extends Shape
{
    /**
     * @param array{NexguardFileMarkerSettings?: NexGuardFileMarkerSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
