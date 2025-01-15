<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property 'CreationTime'|null $SortBy
 * @property string|null $DomainIdEquals
 * @property string|null $UserProfileNameEquals
 * @property string|null $SpaceNameEquals
 */
class ListAppsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     SortBy?: 'CreationTime'|null,
     *     DomainIdEquals?: string|null,
     *     UserProfileNameEquals?: string|null,
     *     SpaceNameEquals?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
