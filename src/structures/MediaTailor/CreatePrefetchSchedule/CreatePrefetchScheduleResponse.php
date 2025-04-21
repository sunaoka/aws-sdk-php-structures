<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreatePrefetchSchedule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property Shapes\PrefetchConsumption|null $Consumption
 * @property string|null $Name
 * @property string|null $PlaybackConfigurationName
 * @property Shapes\PrefetchRetrieval|null $Retrieval
 * @property Shapes\RecurringPrefetchConfiguration|null $RecurringPrefetchConfiguration
 * @property 'SINGLE'|'RECURRING'|null $ScheduleType
 * @property string|null $StreamId
 */
class CreatePrefetchScheduleResponse extends Response
{
}
