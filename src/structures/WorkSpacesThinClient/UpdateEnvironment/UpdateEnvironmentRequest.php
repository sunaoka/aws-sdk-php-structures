<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $name
 * @property string|null $desktopArn
 * @property string|null $desktopEndpoint
 * @property 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY'|null $softwareSetUpdateSchedule
 * @property Shapes\MaintenanceWindow|null $maintenanceWindow
 * @property 'USE_LATEST'|'USE_DESIRED'|null $softwareSetUpdateMode
 * @property string|null $desiredSoftwareSetId
 * @property array<string, string>|null $deviceCreationTags
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string|null,
     *     desktopArn?: string|null,
     *     desktopEndpoint?: string|null,
     *     softwareSetUpdateSchedule?: 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY'|null,
     *     maintenanceWindow?: Shapes\MaintenanceWindow|null,
     *     softwareSetUpdateMode?: 'USE_LATEST'|'USE_DESIRED'|null,
     *     desiredSoftwareSetId?: string|null,
     *     deviceCreationTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
