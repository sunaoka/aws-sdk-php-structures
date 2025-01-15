<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\UpdateRoute;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationId
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $RouteId
 * @property string|null $ServiceId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|'INACTIVE'|null $State
 */
class UpdateRouteResponse extends Response
{
}
