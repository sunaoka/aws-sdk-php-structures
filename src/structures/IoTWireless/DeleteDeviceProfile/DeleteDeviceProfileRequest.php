<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteDeviceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteDeviceProfileRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
