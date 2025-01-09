<?php

namespace Sunaoka\Aws\Structures\DataZone\PostTimeSeriesDataPoints;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $entityId
 * @property 'ASSET'|'LISTING' $entityType
 * @property list<Shapes\TimeSeriesDataPointFormOutput> $forms
 */
class PostTimeSeriesDataPointsResponse extends Response
{
}
