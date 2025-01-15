<?php

namespace Sunaoka\Aws\Structures\Connect\SearchRoutingProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 * @property Shapes\RoutingProfileSearchFilter|null $SearchFilter
 * @property Shapes\RoutingProfileSearchCriteria|null $SearchCriteria
 */
class SearchRoutingProfilesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     SearchFilter?: Shapes\RoutingProfileSearchFilter|null,
     *     SearchCriteria?: Shapes\RoutingProfileSearchCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
