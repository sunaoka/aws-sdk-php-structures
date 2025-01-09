<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $nextToken
 * @property list<Shapes\DeviceFilter> $filters
 */
class ListDevicesRequest extends Request
{
    /**
     * @param array{
     *     arn?: string,
     *     nextToken?: string,
     *     filters?: list<Shapes\DeviceFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
