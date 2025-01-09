<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<Shapes\OperationFilter> $Filters
 */
class ListOperationsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Filters?: list<Shapes\OperationFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
