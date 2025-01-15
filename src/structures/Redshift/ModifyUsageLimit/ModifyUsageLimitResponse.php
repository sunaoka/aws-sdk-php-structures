<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyUsageLimit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $UsageLimitId
 * @property string|null $ClusterIdentifier
 * @property 'spectrum'|'concurrency-scaling'|'cross-region-datasharing'|null $FeatureType
 * @property 'time'|'data-scanned'|null $LimitType
 * @property int|null $Amount
 * @property 'daily'|'weekly'|'monthly'|null $Period
 * @property 'log'|'emit-metric'|'disable'|null $BreachAction
 * @property list<Shapes\Tag>|null $Tags
 */
class ModifyUsageLimitResponse extends Response
{
}
