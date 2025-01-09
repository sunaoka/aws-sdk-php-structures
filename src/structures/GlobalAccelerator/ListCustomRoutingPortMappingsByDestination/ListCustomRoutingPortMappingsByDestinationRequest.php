<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingPortMappingsByDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointId
 * @property string $DestinationAddress
 * @property int<1, 20000> $MaxResults
 * @property string $NextToken
 */
class ListCustomRoutingPortMappingsByDestinationRequest extends Request
{
    /**
     * @param array{
     *     EndpointId: string,
     *     DestinationAddress: string,
     *     MaxResults?: int<1, 20000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
