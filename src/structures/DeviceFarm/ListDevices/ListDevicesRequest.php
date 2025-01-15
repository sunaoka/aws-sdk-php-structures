<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $arn
 * @property string|null $nextToken
 * @property list<Shapes\DeviceFilter>|null $filters
 */
class ListDevicesRequest extends Request
{
    /**
     * @param array{
     *     arn?: string|null,
     *     nextToken?: string|null,
     *     filters?: list<Shapes\DeviceFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
