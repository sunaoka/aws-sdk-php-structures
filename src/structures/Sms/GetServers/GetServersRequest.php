<?php

namespace Sunaoka\Aws\Structures\Sms\GetServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property list<Shapes\VmServerAddress> $vmServerAddressList
 */
class GetServersRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     vmServerAddressList?: list<Shapes\VmServerAddress>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
