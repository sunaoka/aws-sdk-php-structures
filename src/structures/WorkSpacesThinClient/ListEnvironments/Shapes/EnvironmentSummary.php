<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\ListEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $desktopArn
 * @property string|null $desktopEndpoint
 * @property 'workspaces'|'appstream'|'workspaces-web'|null $desktopType
 * @property string|null $activationCode
 * @property 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY'|null $softwareSetUpdateSchedule
 * @property MaintenanceWindow|null $maintenanceWindow
 * @property 'USE_LATEST'|'USE_DESIRED'|null $softwareSetUpdateMode
 * @property string|null $desiredSoftwareSetId
 * @property string|null $pendingSoftwareSetId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $arn
 */
class EnvironmentSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     desktopArn?: string|null,
     *     desktopEndpoint?: string|null,
     *     desktopType?: 'workspaces'|'appstream'|'workspaces-web'|null,
     *     activationCode?: string|null,
     *     softwareSetUpdateSchedule?: 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY'|null,
     *     maintenanceWindow?: MaintenanceWindow|null,
     *     softwareSetUpdateMode?: 'USE_LATEST'|'USE_DESIRED'|null,
     *     desiredSoftwareSetId?: string|null,
     *     pendingSoftwareSetId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
