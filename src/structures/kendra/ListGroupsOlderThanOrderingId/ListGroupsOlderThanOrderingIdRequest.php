<?php

namespace Sunaoka\Aws\Structures\kendra\ListGroupsOlderThanOrderingId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string|null $DataSourceId
 * @property int<0, 32535158400000> $OrderingId
 * @property string|null $NextToken
 * @property int<1, 10>|null $MaxResults
 */
class ListGroupsOlderThanOrderingIdRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     DataSourceId?: string|null,
     *     OrderingId: int<0, 32535158400000>,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 10>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
