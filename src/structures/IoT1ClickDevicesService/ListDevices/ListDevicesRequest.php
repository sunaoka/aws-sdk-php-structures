<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\ListDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceType
 * @property int<1, 250> $MaxResults
 * @property string $NextToken
 */
class ListDevicesRequest extends Request
{
    /**
     * @param array{
     *     DeviceType?: string,
     *     MaxResults?: int<1, 250>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
