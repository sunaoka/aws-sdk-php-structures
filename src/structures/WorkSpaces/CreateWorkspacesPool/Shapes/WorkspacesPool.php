<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspacesPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PoolId
 * @property string $PoolArn
 * @property CapacityStatus $CapacityStatus
 * @property string $PoolName
 * @property string|null $Description
 * @property 'CREATING'|'DELETING'|'RUNNING'|'STARTING'|'STOPPED'|'STOPPING'|'UPDATING' $State
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $BundleId
 * @property string $DirectoryId
 * @property list<WorkspacesPoolError>|null $Errors
 * @property ApplicationSettingsResponse|null $ApplicationSettings
 * @property TimeoutSettings|null $TimeoutSettings
 * @property 'AUTO_STOP'|'ALWAYS_ON' $RunningMode
 */
class WorkspacesPool extends Shape
{
    /**
     * @param array{
     *     PoolId: string,
     *     PoolArn: string,
     *     CapacityStatus: CapacityStatus,
     *     PoolName: string,
     *     Description?: string|null,
     *     State: 'CREATING'|'DELETING'|'RUNNING'|'STARTING'|'STOPPED'|'STOPPING'|'UPDATING',
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     BundleId: string,
     *     DirectoryId: string,
     *     Errors?: list<WorkspacesPoolError>|null,
     *     ApplicationSettings?: ApplicationSettingsResponse|null,
     *     TimeoutSettings?: TimeoutSettings|null,
     *     RunningMode: 'AUTO_STOP'|'ALWAYS_ON'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
