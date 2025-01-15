<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ItemCount
 * @property int|null $UniqueThreatNameCount
 * @property bool|null $Shortened
 * @property list<ScanThreatName>|null $ThreatNames
 */
class ThreatDetectedByName extends Shape
{
    /**
     * @param array{
     *     ItemCount?: int|null,
     *     UniqueThreatNameCount?: int|null,
     *     Shortened?: bool|null,
     *     ThreatNames?: list<ScanThreatName>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
