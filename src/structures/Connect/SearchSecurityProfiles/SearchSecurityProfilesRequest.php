<?php

namespace Sunaoka\Aws\Structures\Connect\SearchSecurityProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\SecurityProfileSearchCriteria|null $SearchCriteria
 * @property Shapes\SecurityProfilesSearchFilter|null $SearchFilter
 */
class SearchSecurityProfilesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SearchCriteria?: Shapes\SecurityProfileSearchCriteria|null,
     *     SearchFilter?: Shapes\SecurityProfilesSearchFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
