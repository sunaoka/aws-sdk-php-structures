<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListWorkforces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Name'|'CreateDate'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $NameContains
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListWorkforcesRequest extends Request
{
    /**
     * @param array{
     *     SortBy?: 'Name'|'CreateDate'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     NameContains?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
