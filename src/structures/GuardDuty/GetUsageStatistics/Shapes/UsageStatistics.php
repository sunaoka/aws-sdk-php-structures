<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UsageAccountResult>|null $SumByAccount
 * @property list<UsageDataSourceResult>|null $SumByDataSource
 * @property list<UsageResourceResult>|null $SumByResource
 * @property list<UsageResourceResult>|null $TopResources
 * @property list<UsageFeatureResult>|null $SumByFeature
 */
class UsageStatistics extends Shape
{
    /**
     * @param array{
     *     SumByAccount?: list<UsageAccountResult>|null,
     *     SumByDataSource?: list<UsageDataSourceResult>|null,
     *     SumByResource?: list<UsageResourceResult>|null,
     *     TopResources?: list<UsageResourceResult>|null,
     *     SumByFeature?: list<UsageFeatureResult>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
