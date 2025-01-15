<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListCoreDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $thingGroupArn
 * @property 'HEALTHY'|'UNHEALTHY'|null $status
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $runtime
 */
class ListCoreDevicesRequest extends Request
{
    /**
     * @param array{
     *     thingGroupArn?: string|null,
     *     status?: 'HEALTHY'|'UNHEALTHY'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     runtime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
