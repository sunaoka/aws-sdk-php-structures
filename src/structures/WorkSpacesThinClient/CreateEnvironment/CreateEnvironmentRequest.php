<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $desktopArn
 * @property string $desktopEndpoint
 * @property 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY' $softwareSetUpdateSchedule
 * @property Shapes\MaintenanceWindow $maintenanceWindow
 * @property 'USE_LATEST'|'USE_DESIRED' $softwareSetUpdateMode
 * @property string $desiredSoftwareSetId
 * @property string $kmsKeyArn
 * @property string $clientToken
 * @property array<string, string> $tags
 * @property array<string, string> $deviceCreationTags
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     desktopArn: string,
     *     desktopEndpoint?: string,
     *     softwareSetUpdateSchedule?: 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY',
     *     maintenanceWindow?: Shapes\MaintenanceWindow,
     *     softwareSetUpdateMode?: 'USE_LATEST'|'USE_DESIRED',
     *     desiredSoftwareSetId?: string,
     *     kmsKeyArn?: string,
     *     clientToken?: string,
     *     tags?: array<string, string>,
     *     deviceCreationTags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
