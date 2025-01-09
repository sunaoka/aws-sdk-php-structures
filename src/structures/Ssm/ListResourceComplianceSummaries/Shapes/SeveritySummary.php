<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceComplianceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CriticalCount
 * @property int $HighCount
 * @property int $MediumCount
 * @property int $LowCount
 * @property int $InformationalCount
 * @property int $UnspecifiedCount
 */
class SeveritySummary extends Shape
{
    /**
     * @param array{
     *     CriticalCount?: int,
     *     HighCount?: int,
     *     MediumCount?: int,
     *     LowCount?: int,
     *     InformationalCount?: int,
     *     UnspecifiedCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
