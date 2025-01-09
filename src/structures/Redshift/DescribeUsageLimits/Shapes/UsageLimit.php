<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeUsageLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UsageLimitId
 * @property string $ClusterIdentifier
 * @property 'spectrum'|'concurrency-scaling'|'cross-region-datasharing' $FeatureType
 * @property 'time'|'data-scanned' $LimitType
 * @property int $Amount
 * @property 'daily'|'weekly'|'monthly' $Period
 * @property 'log'|'emit-metric'|'disable' $BreachAction
 * @property list<Tag> $Tags
 */
class UsageLimit extends Shape
{
    /**
     * @param array{
     *     UsageLimitId?: string,
     *     ClusterIdentifier?: string,
     *     FeatureType?: 'spectrum'|'concurrency-scaling'|'cross-region-datasharing',
     *     LimitType?: 'time'|'data-scanned',
     *     Amount?: int,
     *     Period?: 'daily'|'weekly'|'monthly',
     *     BreachAction?: 'log'|'emit-metric'|'disable',
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
