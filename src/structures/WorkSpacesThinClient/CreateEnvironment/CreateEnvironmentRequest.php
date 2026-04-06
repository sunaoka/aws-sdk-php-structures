<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property string $desktopArn
 * @property string|null $desktopEndpoint
 * @property 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY'|null $softwareSetUpdateSchedule
 * @property Shapes\MaintenanceWindow|null $maintenanceWindow
 * @property 'USE_LATEST'|'USE_DESIRED'|null $softwareSetUpdateMode
 * @property string|null $desiredSoftwareSetId
 * @property string|null $kmsKeyArn
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 * @property array<string, string>|null $deviceCreationTags
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     desktopArn: string,
     *     desktopEndpoint?: string|null,
     *     softwareSetUpdateSchedule?: 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY'|null,
     *     maintenanceWindow?: Shapes\MaintenanceWindow|null,
     *     softwareSetUpdateMode?: 'USE_LATEST'|'USE_DESIRED'|null,
     *     desiredSoftwareSetId?: string|null,
     *     kmsKeyArn?: string|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null,
     *     deviceCreationTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
