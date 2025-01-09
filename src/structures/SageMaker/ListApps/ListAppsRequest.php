<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'Ascending'|'Descending' $SortOrder
 * @property 'CreationTime' $SortBy
 * @property string $DomainIdEquals
 * @property string $UserProfileNameEquals
 * @property string $SpaceNameEquals
 */
class ListAppsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     SortOrder?: 'Ascending'|'Descending',
     *     SortBy?: 'CreationTime',
     *     DomainIdEquals?: string,
     *     UserProfileNameEquals?: string,
     *     SpaceNameEquals?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
