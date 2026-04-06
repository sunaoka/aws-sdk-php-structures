<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeUsageLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UsageLimitId
 * @property string|null $ClusterIdentifier
 * @property 'spectrum'|'concurrency-scaling'|'cross-region-datasharing'|'extra-compute-for-automatic-optimization'|null $FeatureType
 * @property 'time'|'data-scanned'|null $LimitType
 * @property int|null $Amount
 * @property 'daily'|'weekly'|'monthly'|null $Period
 * @property 'log'|'emit-metric'|'disable'|null $BreachAction
 * @property list<Tag>|null $Tags
 */
class UsageLimit extends Shape
{
    /**
     * @param array{
     *     UsageLimitId?: string|null,
     *     ClusterIdentifier?: string|null,
     *     FeatureType?: 'spectrum'|'concurrency-scaling'|'cross-region-datasharing'|'extra-compute-for-automatic-optimization'|null,
     *     LimitType?: 'time'|'data-scanned'|null,
     *     Amount?: int|null,
     *     Period?: 'daily'|'weekly'|'monthly'|null,
     *     BreachAction?: 'log'|'emit-metric'|'disable'|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
