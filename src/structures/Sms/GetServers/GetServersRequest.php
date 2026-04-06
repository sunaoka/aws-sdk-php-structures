<?php

namespace Sunaoka\Aws\Structures\Sms\GetServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int|null $maxResults
 * @property list<Shapes\VmServerAddress>|null $vmServerAddressList
 */
class GetServersRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int|null,
     *     vmServerAddressList?: list<Shapes\VmServerAddress>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
