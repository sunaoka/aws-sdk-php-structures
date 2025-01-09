<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateUsageLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property 'spectrum'|'concurrency-scaling'|'cross-region-datasharing' $FeatureType
 * @property 'time'|'data-scanned' $LimitType
 * @property int $Amount
 * @property 'daily'|'weekly'|'monthly' $Period
 * @property 'log'|'emit-metric'|'disable' $BreachAction
 * @property list<Shapes\Tag> $Tags
 */
class CreateUsageLimitRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     FeatureType: 'spectrum'|'concurrency-scaling'|'cross-region-datasharing',
     *     LimitType: 'time'|'data-scanned',
     *     Amount: int,
     *     Period?: 'daily'|'weekly'|'monthly',
     *     BreachAction?: 'log'|'emit-metric'|'disable',
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
