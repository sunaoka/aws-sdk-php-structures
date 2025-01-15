<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetPrefetchSchedule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property Shapes\PrefetchConsumption|null $Consumption
 * @property string|null $Name
 * @property string|null $PlaybackConfigurationName
 * @property Shapes\PrefetchRetrieval|null $Retrieval
 * @property string|null $StreamId
 */
class GetPrefetchScheduleResponse extends Response
{
}
