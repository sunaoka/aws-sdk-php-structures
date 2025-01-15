<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property list<Shapes\OperationFilter>|null $Filters
 */
class ListOperationsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     Filters?: list<Shapes\OperationFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
