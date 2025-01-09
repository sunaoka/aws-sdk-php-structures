<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $name
 * @property string $desktopArn
 * @property string $desktopEndpoint
 * @property 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY' $softwareSetUpdateSchedule
 * @property Shapes\MaintenanceWindow $maintenanceWindow
 * @property 'USE_LATEST'|'USE_DESIRED' $softwareSetUpdateMode
 * @property string $desiredSoftwareSetId
 * @property array<string, string> $deviceCreationTags
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string,
     *     desktopArn?: string,
     *     desktopEndpoint?: string,
     *     softwareSetUpdateSchedule?: 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY',
     *     maintenanceWindow?: Shapes\MaintenanceWindow,
     *     softwareSetUpdateMode?: 'USE_LATEST'|'USE_DESIRED',
     *     desiredSoftwareSetId?: string,
     *     deviceCreationTags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
