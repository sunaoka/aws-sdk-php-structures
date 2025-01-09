<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateGUISessionAccessDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $resourceName
 * @property 'startExpired'|'notStarted'|'started'|'starting'|'stopped'|'stopping'|'settingUpInstance'|'failedInstanceCreation'|'failedStartingGUISession'|'failedStoppingGUISession' $status
 * @property int $percentageComplete
 * @property string $failureReason
 * @property list<Shapes\Session> $sessions
 */
class CreateGUISessionAccessDetailsResponse extends Response
{
}
