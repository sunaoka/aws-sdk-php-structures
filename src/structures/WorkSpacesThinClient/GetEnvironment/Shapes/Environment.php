<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $desktopArn
 * @property string $desktopEndpoint
 * @property 'workspaces'|'appstream'|'workspaces-web' $desktopType
 * @property string $activationCode
 * @property int $registeredDevicesCount
 * @property 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY' $softwareSetUpdateSchedule
 * @property MaintenanceWindow $maintenanceWindow
 * @property 'USE_LATEST'|'USE_DESIRED' $softwareSetUpdateMode
 * @property string $desiredSoftwareSetId
 * @property string $pendingSoftwareSetId
 * @property string $pendingSoftwareSetVersion
 * @property 'NO_REGISTERED_DEVICES'|'COMPLIANT'|'NOT_COMPLIANT' $softwareSetComplianceStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $arn
 * @property string $kmsKeyArn
 * @property array<string, string> $tags
 * @property array<string, string> $deviceCreationTags
 */
class Environment extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     desktopArn?: string,
     *     desktopEndpoint?: string,
     *     desktopType?: 'workspaces'|'appstream'|'workspaces-web',
     *     activationCode?: string,
     *     registeredDevicesCount?: int,
     *     softwareSetUpdateSchedule?: 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY',
     *     maintenanceWindow?: MaintenanceWindow,
     *     softwareSetUpdateMode?: 'USE_LATEST'|'USE_DESIRED',
     *     desiredSoftwareSetId?: string,
     *     pendingSoftwareSetId?: string,
     *     pendingSoftwareSetVersion?: string,
     *     softwareSetComplianceStatus?: 'NO_REGISTERED_DEVICES'|'COMPLIANT'|'NOT_COMPLIANT',
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     arn?: string,
     *     kmsKeyArn?: string,
     *     tags?: array<string, string>,
     *     deviceCreationTags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
