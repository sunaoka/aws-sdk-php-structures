<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\DeleteRoute;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationId
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $RouteId
 * @property string $ServiceId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|'INACTIVE' $State
 */
class DeleteRouteResponse extends Response
{
}
