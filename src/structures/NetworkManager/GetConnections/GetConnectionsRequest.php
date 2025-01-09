<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property list<string> $ConnectionIds
 * @property string $DeviceId
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetConnectionsRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     ConnectionIds?: list<string>,
     *     DeviceId?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
