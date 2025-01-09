<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyUsageLimit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $UsageLimitId
 * @property string $ClusterIdentifier
 * @property 'spectrum'|'concurrency-scaling'|'cross-region-datasharing' $FeatureType
 * @property 'time'|'data-scanned' $LimitType
 * @property int $Amount
 * @property 'daily'|'weekly'|'monthly' $Period
 * @property 'log'|'emit-metric'|'disable' $BreachAction
 * @property list<Shapes\Tag> $Tags
 */
class ModifyUsageLimitResponse extends Response
{
}
