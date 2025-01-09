<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListSpaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'Ascending'|'Descending' $SortOrder
 * @property 'CreationTime'|'LastModifiedTime' $SortBy
 * @property string $DomainIdEquals
 * @property string $SpaceNameContains
 */
class ListSpacesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     SortOrder?: 'Ascending'|'Descending',
     *     SortBy?: 'CreationTime'|'LastModifiedTime',
     *     DomainIdEquals?: string,
     *     SpaceNameContains?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
