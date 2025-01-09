<?php

namespace Sunaoka\Aws\Structures\DataZone\GetTimeSeriesDataPoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $entityId
 * @property 'ASSET'|'LISTING' $entityType
 * @property Shapes\TimeSeriesDataPointFormOutput $form
 * @property string $formName
 */
class GetTimeSeriesDataPointResponse extends Response
{
}
