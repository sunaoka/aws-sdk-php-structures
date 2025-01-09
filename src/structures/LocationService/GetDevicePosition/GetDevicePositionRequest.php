<?php

namespace Sunaoka\Aws\Structures\LocationService\GetDevicePosition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackerName
 * @property string $DeviceId
 */
class GetDevicePositionRequest extends Request
{
    /**
     * @param array{
     *     TrackerName: string,
     *     DeviceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
