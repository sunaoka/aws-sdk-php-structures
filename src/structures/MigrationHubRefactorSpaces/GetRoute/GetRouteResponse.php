<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\GetRoute;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $AppendSourcePath
 * @property string $ApplicationId
 * @property string $Arn
 * @property string $CreatedByAccountId
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $EnvironmentId
 * @property Shapes\ErrorResponse $Error
 * @property bool $IncludeChildPaths
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property list<'DELETE'|'GET'|'HEAD'|'OPTIONS'|'PATCH'|'POST'|'PUT'> $Methods
 * @property string $OwnerAccountId
 * @property array<string, string> $PathResourceToId
 * @property string $RouteId
 * @property 'DEFAULT'|'URI_PATH' $RouteType
 * @property string $ServiceId
 * @property string $SourcePath
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|'INACTIVE' $State
 * @property array<string, string> $Tags
 */
class GetRouteResponse extends Response
{
}
