<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\GetRoute;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $AppendSourcePath
 * @property string|null $ApplicationId
 * @property string|null $Arn
 * @property string|null $CreatedByAccountId
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $EnvironmentId
 * @property Shapes\ErrorResponse|null $Error
 * @property bool|null $IncludeChildPaths
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property list<'DELETE'|'GET'|'HEAD'|'OPTIONS'|'PATCH'|'POST'|'PUT'>|null $Methods
 * @property string|null $OwnerAccountId
 * @property array<string, string>|null $PathResourceToId
 * @property string|null $RouteId
 * @property 'DEFAULT'|'URI_PATH'|null $RouteType
 * @property string|null $ServiceId
 * @property string|null $SourcePath
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|'INACTIVE'|null $State
 * @property array<string, string>|null $Tags
 */
class GetRouteResponse extends Response
{
}
