<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FINDING'|'ACCOUNT'|'ORGANIZATION'|null $InvestigationType
 * @property string|null $FindingId
 * @property string|null $AccountId
 * @property string|null $AdminAccountId
 * @property QueryTimeWindow|null $QueryTimeWindow
 */
class InvestigationScope extends Shape
{
    /**
     * @param array{
     *     InvestigationType?: 'FINDING'|'ACCOUNT'|'ORGANIZATION'|null,
     *     FindingId?: string|null,
     *     AccountId?: string|null,
     *     AdminAccountId?: string|null,
     *     QueryTimeWindow?: QueryTimeWindow|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
