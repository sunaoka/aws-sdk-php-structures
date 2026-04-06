<?php

namespace Sunaoka\Aws\Structures\LocationService\GetDevicePosition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceId
 * @property string $TrackerName
 */
class GetDevicePositionRequest extends Request
{
    /**
     * @param array{
     *     DeviceId: string,
     *     TrackerName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
