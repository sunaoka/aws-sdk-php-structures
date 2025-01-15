<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetDeleteEventsByEventTypeStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $eventTypeName
 * @property 'IN_PROGRESS_INITIALIZING'|'IN_PROGRESS'|'CANCEL_IN_PROGRESS'|'CANCELED'|'COMPLETE'|'FAILED'|null $eventsDeletionStatus
 */
class GetDeleteEventsByEventTypeStatusResponse extends Response
{
}
