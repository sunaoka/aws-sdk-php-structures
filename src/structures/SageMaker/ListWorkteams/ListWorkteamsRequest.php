<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListWorkteams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Name'|'CreateDate' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $NameContains
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListWorkteamsRequest extends Request
{
    /**
     * @param array{
     *     SortBy?: 'Name'|'CreateDate',
     *     SortOrder?: 'Ascending'|'Descending',
     *     NameContains?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
