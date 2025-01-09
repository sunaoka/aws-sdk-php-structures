<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\ListDeviceResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $managedDeviceId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $type
 */
class ListDeviceResourcesRequest extends Request
{
    /**
     * @param array{
     *     managedDeviceId: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     type?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
