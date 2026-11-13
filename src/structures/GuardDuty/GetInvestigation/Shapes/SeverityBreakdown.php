<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Critical
 * @property int|null $High
 * @property int|null $Medium
 * @property int|null $Low
 * @property int|null $Info
 */
class SeverityBreakdown extends Shape
{
    /**
     * @param array{
     *     Critical?: int|null,
     *     High?: int|null,
     *     Medium?: int|null,
     *     Low?: int|null,
     *     Info?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
