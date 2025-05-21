<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\UpdateStreamGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property list<string>|null $AssociatedApplications
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property Shapes\DefaultApplication|null $DefaultApplication
 * @property string|null $Description
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property list<Shapes\LocationState>|null $LocationStates
 * @property 'ACTIVATING'|'UPDATING_LOCATIONS'|'ACTIVE'|'ACTIVE_WITH_ERRORS'|'ERROR'|'DELETING'|null $Status
 * @property 'internalError'|'noAvailableInstances'|null $StatusReason
 * @property 'gen4n_high'|'gen4n_ultra'|'gen4n_win2022'|'gen5n_high'|'gen5n_ultra'|'gen5n_win2022'|null $StreamClass
 */
class UpdateStreamGroupResponse extends Response
{
}
