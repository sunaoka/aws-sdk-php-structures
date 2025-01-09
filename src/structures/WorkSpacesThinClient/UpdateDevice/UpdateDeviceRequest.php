<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\UpdateDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $name
 * @property string $desiredSoftwareSetId
 * @property 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY' $softwareSetUpdateSchedule
 */
class UpdateDeviceRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string,
     *     desiredSoftwareSetId?: string,
     *     softwareSetUpdateSchedule?: 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
