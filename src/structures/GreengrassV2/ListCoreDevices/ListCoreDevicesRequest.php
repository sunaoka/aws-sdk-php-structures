<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListCoreDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingGroupArn
 * @property 'HEALTHY'|'UNHEALTHY' $status
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $runtime
 */
class ListCoreDevicesRequest extends Request
{
    /**
     * @param array{
     *     thingGroupArn?: string,
     *     status?: 'HEALTHY'|'UNHEALTHY',
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     runtime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
