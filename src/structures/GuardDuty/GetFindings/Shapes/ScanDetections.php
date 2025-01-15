<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScannedItemCount|null $ScannedItemCount
 * @property ThreatsDetectedItemCount|null $ThreatsDetectedItemCount
 * @property HighestSeverityThreatDetails|null $HighestSeverityThreatDetails
 * @property ThreatDetectedByName|null $ThreatDetectedByName
 */
class ScanDetections extends Shape
{
    /**
     * @param array{
     *     ScannedItemCount?: ScannedItemCount|null,
     *     ThreatsDetectedItemCount?: ThreatsDetectedItemCount|null,
     *     HighestSeverityThreatDetails?: HighestSeverityThreatDetails|null,
     *     ThreatDetectedByName?: ThreatDetectedByName|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
