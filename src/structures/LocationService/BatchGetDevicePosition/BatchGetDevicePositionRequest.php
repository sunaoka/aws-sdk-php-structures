<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchGetDevicePosition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $DeviceIds
 * @property string $TrackerName
 */
class BatchGetDevicePositionRequest extends Request
{
    /**
     * @param array{
     *     DeviceIds: list<string>,
     *     TrackerName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
