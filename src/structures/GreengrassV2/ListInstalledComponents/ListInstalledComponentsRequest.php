<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListInstalledComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $coreDeviceThingName
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property 'ALL'|'ROOT' $topologyFilter
 */
class ListInstalledComponentsRequest extends Request
{
    /**
     * @param array{
     *     coreDeviceThingName: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     topologyFilter?: 'ALL'|'ROOT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
