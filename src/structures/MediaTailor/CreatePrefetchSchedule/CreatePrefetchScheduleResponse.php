<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreatePrefetchSchedule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property Shapes\PrefetchConsumption $Consumption
 * @property string $Name
 * @property string $PlaybackConfigurationName
 * @property Shapes\PrefetchRetrieval $Retrieval
 * @property string $StreamId
 */
class CreatePrefetchScheduleResponse extends Response
{
}
