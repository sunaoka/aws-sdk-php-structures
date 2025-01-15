<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingPortMappingsByDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointId
 * @property string $DestinationAddress
 * @property int<1, 20000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListCustomRoutingPortMappingsByDestinationRequest extends Request
{
    /**
     * @param array{
     *     EndpointId: string,
     *     DestinationAddress: string,
     *     MaxResults?: int<1, 20000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
