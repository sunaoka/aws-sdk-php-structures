<?php

namespace Sunaoka\Aws\Structures\kendra\ListGroupsOlderThanOrderingId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $DataSourceId
 * @property int<0, 32535158400000> $OrderingId
 * @property string $NextToken
 * @property int<1, 10> $MaxResults
 */
class ListGroupsOlderThanOrderingIdRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     DataSourceId?: string,
     *     OrderingId: int<0, 32535158400000>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 10>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
