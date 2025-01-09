<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetOrganizationStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalAccountsCount
 * @property int $MemberAccountsCount
 * @property int $ActiveAccountsCount
 * @property int $EnabledAccountsCount
 * @property list<OrganizationFeatureStatistics> $CountByFeature
 */
class OrganizationStatistics extends Shape
{
    /**
     * @param array{
     *     TotalAccountsCount?: int,
     *     MemberAccountsCount?: int,
     *     ActiveAccountsCount?: int,
     *     EnabledAccountsCount?: int,
     *     CountByFeature?: list<OrganizationFeatureStatistics>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
