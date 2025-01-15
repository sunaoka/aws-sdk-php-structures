<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\UpdateDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $name
 * @property string|null $desiredSoftwareSetId
 * @property 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY'|null $softwareSetUpdateSchedule
 */
class UpdateDeviceRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string|null,
     *     desiredSoftwareSetId?: string|null,
     *     softwareSetUpdateSchedule?: 'USE_MAINTENANCE_WINDOW'|'APPLY_IMMEDIATELY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
