<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchGetDevicePosition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackerName
 * @property list<string> $DeviceIds
 */
class BatchGetDevicePositionRequest extends Request
{
    /**
     * @param array{
     *     TrackerName: string,
     *     DeviceIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
