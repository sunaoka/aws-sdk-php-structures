<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UsageAccountResult> $SumByAccount
 * @property list<UsageTopAccountsResult> $TopAccountsByFeature
 * @property list<UsageDataSourceResult> $SumByDataSource
 * @property list<UsageResourceResult> $SumByResource
 * @property list<UsageResourceResult> $TopResources
 * @property list<UsageFeatureResult> $SumByFeature
 */
class UsageStatistics extends Shape
{
    /**
     * @param array{
     *     SumByAccount?: list<UsageAccountResult>,
     *     TopAccountsByFeature?: list<UsageTopAccountsResult>,
     *     SumByDataSource?: list<UsageDataSourceResult>,
     *     SumByResource?: list<UsageResourceResult>,
     *     TopResources?: list<UsageResourceResult>,
     *     SumByFeature?: list<UsageFeatureResult>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
