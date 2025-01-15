<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AppendSourcePath
 * @property string|null $ApplicationId
 * @property string|null $Arn
 * @property string|null $CreatedByAccountId
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $EnvironmentId
 * @property ErrorResponse|null $Error
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
class RouteSummary extends Shape
{
    /**
     * @param array{
     *     AppendSourcePath?: bool|null,
     *     ApplicationId?: string|null,
     *     Arn?: string|null,
     *     CreatedByAccountId?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     EnvironmentId?: string|null,
     *     Error?: ErrorResponse|null,
     *     IncludeChildPaths?: bool|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     Methods?: list<'DELETE'|'GET'|'HEAD'|'OPTIONS'|'PATCH'|'POST'|'PUT'>|null,
     *     OwnerAccountId?: string|null,
     *     PathResourceToId?: array<string, string>|null,
     *     RouteId?: string|null,
     *     RouteType?: 'DEFAULT'|'URI_PATH'|null,
     *     ServiceId?: string|null,
     *     SourcePath?: string|null,
     *     State?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|'INACTIVE'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
