<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\ListTunnels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property int $maxResults
 * @property string $nextToken
 */
class ListTunnelsRequest extends Request
{
    /**
     * @param array{
     *     thingName?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
