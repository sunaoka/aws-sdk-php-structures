<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSimilarProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string $DomainName
 * @property 'RULE_BASED_MATCHING'|'ML_BASED_MATCHING' $MatchType
 * @property string $SearchKey
 * @property string $SearchValue
 */
class GetSimilarProfilesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     DomainName: string,
     *     MatchType: 'RULE_BASED_MATCHING'|'ML_BASED_MATCHING',
     *     SearchKey: string,
     *     SearchValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
