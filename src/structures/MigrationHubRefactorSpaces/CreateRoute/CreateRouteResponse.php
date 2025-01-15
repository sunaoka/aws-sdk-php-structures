<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateRoute;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationId
 * @property string|null $Arn
 * @property string|null $CreatedByAccountId
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $OwnerAccountId
 * @property string|null $RouteId
 * @property 'DEFAULT'|'URI_PATH'|null $RouteType
 * @property string|null $ServiceId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|'INACTIVE'|null $State
 * @property array<string, string>|null $Tags
 * @property Shapes\UriPathRouteInput|null $UriPathRoute
 */
class CreateRouteResponse extends Response
{
}
