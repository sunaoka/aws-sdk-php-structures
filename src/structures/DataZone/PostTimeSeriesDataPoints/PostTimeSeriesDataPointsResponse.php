<?php

namespace Sunaoka\Aws\Structures\DataZone\PostTimeSeriesDataPoints;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $domainId
 * @property string|null $entityId
 * @property 'ASSET'|'LISTING'|null $entityType
 * @property list<Shapes\TimeSeriesDataPointFormOutput>|null $forms
 */
class PostTimeSeriesDataPointsResponse extends Response
{
}
