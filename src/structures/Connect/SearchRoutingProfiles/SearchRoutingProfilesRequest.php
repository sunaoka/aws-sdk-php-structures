<?php

namespace Sunaoka\Aws\Structures\Connect\SearchRoutingProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 * @property Shapes\RoutingProfileSearchFilter $SearchFilter
 * @property Shapes\RoutingProfileSearchCriteria $SearchCriteria
 */
class SearchRoutingProfilesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>,
     *     SearchFilter?: Shapes\RoutingProfileSearchFilter,
     *     SearchCriteria?: Shapes\RoutingProfileSearchCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
