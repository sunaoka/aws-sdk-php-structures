<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $desktopArn
 * @property string|null $desktopEndpoint
 * @property 'workspaces'|'appstream'|'workspaces-web'|null $desktopType
 * @property string|null $activationCode
 * @property int|null $registeredDevicesCount
 * @property 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY'|null $softwareSetUpdateSchedule
 * @property MaintenanceWindow|null $maintenanceWindow
 * @property 'USE_LATEST'|'USE_DESIRED'|null $softwareSetUpdateMode
 * @property string|null $desiredSoftwareSetId
 * @property string|null $pendingSoftwareSetId
 * @property string|null $pendingSoftwareSetVersion
 * @property 'NO_REGISTERED_DEVICES'|'COMPLIANT'|'NOT_COMPLIANT'|null $softwareSetComplianceStatus
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $arn
 * @property string|null $kmsKeyArn
 * @property array<string, string>|null $tags
 * @property array<string, string>|null $deviceCreationTags
 */
class Environment extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     desktopArn?: string|null,
     *     desktopEndpoint?: string|null,
     *     desktopType?: 'workspaces'|'appstream'|'workspaces-web'|null,
     *     activationCode?: string|null,
     *     registeredDevicesCount?: int|null,
     *     softwareSetUpdateSchedule?: 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY'|null,
     *     maintenanceWindow?: MaintenanceWindow|null,
     *     softwareSetUpdateMode?: 'USE_LATEST'|'USE_DESIRED'|null,
     *     desiredSoftwareSetId?: string|null,
     *     pendingSoftwareSetId?: string|null,
     *     pendingSoftwareSetVersion?: string|null,
     *     softwareSetComplianceStatus?: 'NO_REGISTERED_DEVICES'|'COMPLIANT'|'NOT_COMPLIANT'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     arn?: string|null,
     *     kmsKeyArn?: string|null,
     *     tags?: array<string, string>|null,
     *     deviceCreationTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
