<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Severity
 * @property string|null $ThreatName
 * @property int|null $Count
 */
class HighestSeverityThreatDetails extends Shape
{
    /**
     * @param array{
     *     Severity?: string|null,
     *     ThreatName?: string|null,
     *     Count?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
