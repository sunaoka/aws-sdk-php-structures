<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ItemCount
 * @property int $UniqueThreatNameCount
 * @property bool $Shortened
 * @property list<ScanThreatName> $ThreatNames
 */
class ThreatDetectedByName extends Shape
{
    /**
     * @param array{
     *     ItemCount?: int,
     *     UniqueThreatNameCount?: int,
     *     Shortened?: bool,
     *     ThreatNames?: list<ScanThreatName>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
