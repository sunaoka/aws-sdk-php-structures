<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateUsageLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property 'spectrum'|'concurrency-scaling'|'cross-region-datasharing'|'extra-compute-for-automatic-optimization' $FeatureType
 * @property 'time'|'data-scanned' $LimitType
 * @property int $Amount
 * @property 'daily'|'weekly'|'monthly'|null $Period
 * @property 'log'|'emit-metric'|'disable'|null $BreachAction
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateUsageLimitRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     FeatureType: 'spectrum'|'concurrency-scaling'|'cross-region-datasharing'|'extra-compute-for-automatic-optimization',
     *     LimitType: 'time'|'data-scanned',
     *     Amount: int,
     *     Period?: 'daily'|'weekly'|'monthly'|null,
     *     BreachAction?: 'log'|'emit-metric'|'disable'|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
