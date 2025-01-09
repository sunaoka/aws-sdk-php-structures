<?php

namespace Sunaoka\Aws\Structures\LocationService\VerifyDevicePosition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackerName
 * @property Shapes\DeviceState $DeviceState
 * @property 'Kilometers'|'Miles' $DistanceUnit
 */
class VerifyDevicePositionRequest extends Request
{
    /**
     * @param array{
     *     TrackerName: string,
     *     DeviceState: Shapes\DeviceState,
     *     DistanceUnit?: 'Kilometers'|'Miles'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
