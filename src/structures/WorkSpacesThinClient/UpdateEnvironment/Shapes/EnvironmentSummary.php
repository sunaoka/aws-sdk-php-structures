<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $desktopArn
 * @property string $desktopEndpoint
 * @property 'workspaces'|'appstream'|'workspaces-web' $desktopType
 * @property string $activationCode
 * @property 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY' $softwareSetUpdateSchedule
 * @property MaintenanceWindow $maintenanceWindow
 * @property 'USE_LATEST'|'USE_DESIRED' $softwareSetUpdateMode
 * @property string $desiredSoftwareSetId
 * @property string $pendingSoftwareSetId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $arn
 */
class EnvironmentSummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     desktopArn?: string,
     *     desktopEndpoint?: string,
     *     desktopType?: 'workspaces'|'appstream'|'workspaces-web',
     *     activationCode?: string,
     *     softwareSetUpdateSchedule?: 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY',
     *     maintenanceWindow?: MaintenanceWindow,
     *     softwareSetUpdateMode?: 'USE_LATEST'|'USE_DESIRED',
     *     desiredSoftwareSetId?: string,
     *     pendingSoftwareSetId?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
