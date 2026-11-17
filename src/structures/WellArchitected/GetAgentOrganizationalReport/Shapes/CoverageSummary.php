<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentOrganizationalReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $totalAccountsInScope
 * @property int $accountsWithProfile
 * @property int $accountsWithoutProfile
 * @property int $failedAccountCount
 * @property int $totalProfiles
 * @property int $totalRecommendations
 * @property list<PillarCount>|null $recommendationCountByPillar
 * @property list<PriorityCount>|null $recommendationCountByPriority
 * @property list<FailedAccount>|null $failedAccounts
 * @property list<FailedOrganizationalUnit>|null $failedOrganizationalUnits
 */
class CoverageSummary extends Shape
{
    /**
     * @param array{
     *     totalAccountsInScope: int,
     *     accountsWithProfile: int,
     *     accountsWithoutProfile: int,
     *     failedAccountCount: int,
     *     totalProfiles: int,
     *     totalRecommendations: int,
     *     recommendationCountByPillar?: list<PillarCount>|null,
     *     recommendationCountByPriority?: list<PriorityCount>|null,
     *     failedAccounts?: list<FailedAccount>|null,
     *     failedOrganizationalUnits?: list<FailedOrganizationalUnit>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
