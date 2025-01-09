<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspacesPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PoolId
 * @property string $PoolArn
 * @property CapacityStatus $CapacityStatus
 * @property string $PoolName
 * @property string $Description
 * @property 'CREATING'|'DELETING'|'RUNNING'|'STARTING'|'STOPPED'|'STOPPING'|'UPDATING' $State
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $BundleId
 * @property string $DirectoryId
 * @property list<WorkspacesPoolError> $Errors
 * @property ApplicationSettingsResponse $ApplicationSettings
 * @property TimeoutSettings $TimeoutSettings
 */
class WorkspacesPool extends Shape
{
    /**
     * @param array{
     *     PoolId: string,
     *     PoolArn: string,
     *     CapacityStatus: CapacityStatus,
     *     PoolName: string,
     *     Description?: string,
     *     State: 'CREATING'|'DELETING'|'RUNNING'|'STARTING'|'STOPPED'|'STOPPING'|'UPDATING',
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     BundleId: string,
     *     DirectoryId: string,
     *     Errors?: list<WorkspacesPoolError>,
     *     ApplicationSettings?: ApplicationSettingsResponse,
     *     TimeoutSettings?: TimeoutSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
