<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchUpdateDevicePosition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackerName
 * @property list<Shapes\DevicePositionUpdate> $Updates
 */
class BatchUpdateDevicePositionRequest extends Request
{
    /**
     * @param array{
     *     TrackerName: string,
     *     Updates: list<Shapes\DevicePositionUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
