<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListSpaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property 'CreationTime'|'LastModifiedTime'|null $SortBy
 * @property string|null $DomainIdEquals
 * @property string|null $SpaceNameContains
 */
class ListSpacesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     SortBy?: 'CreationTime'|'LastModifiedTime'|null,
     *     DomainIdEquals?: string|null,
     *     SpaceNameContains?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
