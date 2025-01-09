<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartInputDeviceMaintenanceWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputDeviceId
 */
class StartInputDeviceMaintenanceWindowRequest extends Request
{
    /**
     * @param array{InputDeviceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
