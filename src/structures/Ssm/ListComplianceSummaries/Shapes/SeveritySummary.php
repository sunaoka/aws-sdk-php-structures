<?php

namespace Sunaoka\Aws\Structures\Ssm\ListComplianceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CriticalCount
 * @property int|null $HighCount
 * @property int|null $MediumCount
 * @property int|null $LowCount
 * @property int|null $InformationalCount
 * @property int|null $UnspecifiedCount
 */
class SeveritySummary extends Shape
{
    /**
     * @param array{
     *     CriticalCount?: int|null,
     *     HighCount?: int|null,
     *     MediumCount?: int|null,
     *     LowCount?: int|null,
     *     InformationalCount?: int|null,
     *     UnspecifiedCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
