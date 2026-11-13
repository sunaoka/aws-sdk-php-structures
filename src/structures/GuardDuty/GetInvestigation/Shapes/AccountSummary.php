<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property int|null $FindingCount
 */
class AccountSummary extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     FindingCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
