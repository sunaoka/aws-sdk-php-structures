<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateGUISessionAccessDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $resourceName
 * @property 'startExpired'|'notStarted'|'started'|'starting'|'stopped'|'stopping'|'settingUpInstance'|'failedInstanceCreation'|'failedStartingGUISession'|'failedStoppingGUISession'|null $status
 * @property int|null $percentageComplete
 * @property string|null $failureReason
 * @property list<Shapes\Session>|null $sessions
 */
class CreateGUISessionAccessDetailsResponse extends Response
{
}
