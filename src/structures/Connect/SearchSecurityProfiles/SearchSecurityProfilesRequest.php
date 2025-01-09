<?php

namespace Sunaoka\Aws\Structures\Connect\SearchSecurityProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property Shapes\SecurityProfileSearchCriteria $SearchCriteria
 * @property Shapes\SecurityProfilesSearchFilter $SearchFilter
 */
class SearchSecurityProfilesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     SearchCriteria?: Shapes\SecurityProfileSearchCriteria,
     *     SearchFilter?: Shapes\SecurityProfilesSearchFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
