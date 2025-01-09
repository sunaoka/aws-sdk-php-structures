<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AppendSourcePath
 * @property string $ApplicationId
 * @property string $Arn
 * @property string $CreatedByAccountId
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $EnvironmentId
 * @property ErrorResponse $Error
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
class RouteSummary extends Shape
{
    /**
     * @param array{
     *     AppendSourcePath?: bool,
     *     ApplicationId?: string,
     *     Arn?: string,
     *     CreatedByAccountId?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     EnvironmentId?: string,
     *     Error?: ErrorResponse,
     *     IncludeChildPaths?: bool,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     Methods?: list<'DELETE'|'GET'|'HEAD'|'OPTIONS'|'PATCH'|'POST'|'PUT'>,
     *     OwnerAccountId?: string,
     *     PathResourceToId?: array<string, string>,
     *     RouteId?: string,
     *     RouteType?: 'DEFAULT'|'URI_PATH',
     *     ServiceId?: string,
     *     SourcePath?: string,
     *     State?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|'INACTIVE',
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
