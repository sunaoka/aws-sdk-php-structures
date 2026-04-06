<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetOrganizationStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TotalAccountsCount
 * @property int|null $MemberAccountsCount
 * @property int|null $ActiveAccountsCount
 * @property int|null $EnabledAccountsCount
 * @property list<OrganizationFeatureStatistics>|null $CountByFeature
 */
class OrganizationStatistics extends Shape
{
    /**
     * @param array{
     *     TotalAccountsCount?: int|null,
     *     MemberAccountsCount?: int|null,
     *     ActiveAccountsCount?: int|null,
     *     EnabledAccountsCount?: int|null,
     *     CountByFeature?: list<OrganizationFeatureStatistics>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
