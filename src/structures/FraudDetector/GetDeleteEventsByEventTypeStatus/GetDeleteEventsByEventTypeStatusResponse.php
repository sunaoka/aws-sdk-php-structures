<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetDeleteEventsByEventTypeStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $eventTypeName
 * @property 'IN_PROGRESS_INITIALIZING'|'IN_PROGRESS'|'CANCEL_IN_PROGRESS'|'CANCELED'|'COMPLETE'|'FAILED' $eventsDeletionStatus
 */
class GetDeleteEventsByEventTypeStatusResponse extends Response
{
}
