<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScannedItemCount $ScannedItemCount
 * @property ThreatsDetectedItemCount $ThreatsDetectedItemCount
 * @property HighestSeverityThreatDetails $HighestSeverityThreatDetails
 * @property ThreatDetectedByName $ThreatDetectedByName
 */
class ScanDetections extends Shape
{
    /**
     * @param array{
     *     ScannedItemCount?: ScannedItemCount,
     *     ThreatsDetectedItemCount?: ThreatsDetectedItemCount,
     *     HighestSeverityThreatDetails?: HighestSeverityThreatDetails,
     *     ThreatDetectedByName?: ThreatDetectedByName
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
