<?php

namespace Sunaoka\Aws\Structures\kendra\ListGroupsOlderThanOrderingId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $DataSourceId
 * @property int $OrderingId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListGroupsOlderThanOrderingIdRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     DataSourceId?: string,
     *     OrderingId: int,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
