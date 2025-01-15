<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property list<string>|null $ConnectionIds
 * @property string|null $DeviceId
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class GetConnectionsRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     ConnectionIds?: list<string>|null,
     *     DeviceId?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
