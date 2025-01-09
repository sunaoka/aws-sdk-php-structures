<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListOperationEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OperationId
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 */
class ListOperationEventsRequest extends Request
{
    /**
     * @param array{
     *     OperationId: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
