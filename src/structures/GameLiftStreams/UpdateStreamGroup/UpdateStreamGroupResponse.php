<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\UpdateStreamGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string|null $Description
 * @property Shapes\DefaultApplication|null $DefaultApplication
 * @property list<Shapes\LocationState>|null $LocationStates
 * @property 'gen4n_high'|'gen4n_ultra'|'gen4n_win2022'|'gen5n_high'|'gen5n_ultra'|'gen5n_win2022'|null $StreamClass
 * @property string|null $Id
 * @property 'ACTIVATING'|'UPDATING_LOCATIONS'|'ACTIVE'|'ACTIVE_WITH_ERRORS'|'ERROR'|'DELETING'|'EXPIRED'|null $Status
 * @property 'internalError'|'noAvailableInstances'|null $StatusReason
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 * @property list<string>|null $AssociatedApplications
 */
class UpdateStreamGroupResponse extends Response
{
}
