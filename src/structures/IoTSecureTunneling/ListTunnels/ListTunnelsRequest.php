<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\ListTunnels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $thingName
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListTunnelsRequest extends Request
{
    /**
     * @param array{
     *     thingName?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
