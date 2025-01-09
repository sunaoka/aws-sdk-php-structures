<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListClientDevicesAssociatedWithCoreDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $coreDeviceThingName
 * @property int $maxResults
 * @property string $nextToken
 */
class ListClientDevicesAssociatedWithCoreDeviceRequest extends Request
{
    /**
     * @param array{
     *     coreDeviceThingName: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
