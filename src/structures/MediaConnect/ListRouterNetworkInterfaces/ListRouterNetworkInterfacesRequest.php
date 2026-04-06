<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListRouterNetworkInterfaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\RouterNetworkInterfaceFilter>|null $Filters
 */
class ListRouterNetworkInterfacesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\RouterNetworkInterfaceFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
