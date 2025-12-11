<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListRouterOutputs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\RouterOutputFilter>|null $Filters
 */
class ListRouterOutputsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\RouterOutputFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
