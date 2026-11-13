<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Rank
 * @property string|null $AccountId
 * @property int<0, max>|null $FindingCount
 * @property 'Info'|'Low'|'Medium'|'High'|'Critical'|null $RiskLevel
 * @property string|null $RiskRationale
 */
class MemberAccountRanking extends Shape
{
    /**
     * @param array{
     *     Rank?: int|null,
     *     AccountId?: string|null,
     *     FindingCount?: int<0, max>|null,
     *     RiskLevel?: 'Info'|'Low'|'Medium'|'High'|'Critical'|null,
     *     RiskRationale?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
