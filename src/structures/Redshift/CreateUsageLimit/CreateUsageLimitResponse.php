<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateUsageLimit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $UsageLimitId
 * @property string|null $ClusterIdentifier
 * @property 'spectrum'|'concurrency-scaling'|'cross-region-datasharing'|'extra-compute-for-automatic-optimization'|null $FeatureType
 * @property 'time'|'data-scanned'|null $LimitType
 * @property int|null $Amount
 * @property 'daily'|'weekly'|'monthly'|null $Period
 * @property 'log'|'emit-metric'|'disable'|null $BreachAction
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateUsageLimitResponse extends Response
{
}
