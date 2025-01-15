<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\ListDeviceResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $managedDeviceId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $type
 */
class ListDeviceResourcesRequest extends Request
{
    /**
     * @param array{
     *     managedDeviceId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
