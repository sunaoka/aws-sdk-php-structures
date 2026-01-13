<?php

namespace Sunaoka\Aws\Structures\DataZone\GetTimeSeriesDataPoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $domainId
 * @property string|null $entityId
 * @property 'ASSET'|'LISTING'|null $entityType
 * @property string|null $formName
 * @property Shapes\TimeSeriesDataPointFormOutput|null $form
 */
class GetTimeSeriesDataPointResponse extends Response
{
}
