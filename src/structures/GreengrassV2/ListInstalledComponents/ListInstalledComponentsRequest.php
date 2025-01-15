<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListInstalledComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $coreDeviceThingName
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'ALL'|'ROOT'|null $topologyFilter
 */
class ListInstalledComponentsRequest extends Request
{
    /**
     * @param array{
     *     coreDeviceThingName: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     topologyFilter?: 'ALL'|'ROOT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
