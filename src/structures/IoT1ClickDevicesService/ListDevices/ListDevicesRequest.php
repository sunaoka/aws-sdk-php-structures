<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\ListDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DeviceType
 * @property int<1, 250>|null $MaxResults
 * @property string|null $NextToken
 */
class ListDevicesRequest extends Request
{
    /**
     * @param array{
     *     DeviceType?: string|null,
     *     MaxResults?: int<1, 250>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
