<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListOperationEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OperationId
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 */
class ListOperationEventsRequest extends Request
{
    /**
     * @param array{
     *     OperationId: string,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
