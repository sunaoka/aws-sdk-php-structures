<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Severity
 * @property string $ThreatName
 * @property int $Count
 */
class HighestSeverityThreatDetails extends Shape
{
    /**
     * @param array{
     *     Severity?: string,
     *     ThreatName?: string,
     *     Count?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
