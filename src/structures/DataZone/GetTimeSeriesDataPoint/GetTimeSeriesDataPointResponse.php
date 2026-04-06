<?php

namespace Sunaoka\Aws\Structures\DataZone\GetTimeSeriesDataPoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $domainId
 * @property string|null $entityId
 * @property 'ASSET'|'LISTING'|null $entityType
 * @property Shapes\TimeSeriesDataPointFormOutput|null $form
 * @property string|null $formName
 */
class GetTimeSeriesDataPointResponse extends Response
{
}
