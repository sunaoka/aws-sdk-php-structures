<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $AccountStatus
 * @property string|null $DetectorId
 * @property string|null $Region
 * @property string|null $DelegatedAdminAccountId
 * @property int<0, max>|null $TotalMemberAccounts
 * @property int<0, max>|null $TotalFindings
 * @property int<0, max>|null $AffectedAccountCount
 * @property list<MemberAccountRanking>|null $AccountRankings
 */
class AccountOverview extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     AccountStatus?: string|null,
     *     DetectorId?: string|null,
     *     Region?: string|null,
     *     DelegatedAdminAccountId?: string|null,
     *     TotalMemberAccounts?: int<0, max>|null,
     *     TotalFindings?: int<0, max>|null,
     *     AffectedAccountCount?: int<0, max>|null,
     *     AccountRankings?: list<MemberAccountRanking>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
