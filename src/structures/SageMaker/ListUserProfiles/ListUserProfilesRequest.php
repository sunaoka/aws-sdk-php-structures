<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListUserProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property 'Ascending'|'Descending' $SortOrder
 * @property 'CreationTime'|'LastModifiedTime' $SortBy
 * @property string $DomainIdEquals
 * @property string $UserProfileNameContains
 */
class ListUserProfilesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     SortOrder?: 'Ascending'|'Descending',
     *     SortBy?: 'CreationTime'|'LastModifiedTime',
     *     DomainIdEquals?: string,
     *     UserProfileNameContains?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
