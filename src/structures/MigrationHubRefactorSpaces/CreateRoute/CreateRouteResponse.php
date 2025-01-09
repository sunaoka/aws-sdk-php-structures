<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateRoute;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationId
 * @property string $Arn
 * @property string $CreatedByAccountId
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $OwnerAccountId
 * @property string $RouteId
 * @property 'DEFAULT'|'URI_PATH' $RouteType
 * @property string $ServiceId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|'INACTIVE' $State
 * @property array<string, string> $Tags
 * @property Shapes\UriPathRouteInput $UriPathRoute
 */
class CreateRouteResponse extends Response
{
}
