<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateScheduleAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $actionName
 * @property Shapes\ScheduleActionStartConfiguration $startConfiguration
 * @property list<Shapes\ScheduleActionOperation> $operations
 * @property 'PENDING'|'COMPLETED'|'FAILED' $status
 * @property Shapes\ScheduleActionError|null $error
 */
class CreateScheduleActionResponse extends Response
{
}
