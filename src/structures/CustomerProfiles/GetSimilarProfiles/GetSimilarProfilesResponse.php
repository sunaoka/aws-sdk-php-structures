<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSimilarProfiles;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $ProfileIds
 * @property string|null $MatchId
 * @property 'RULE_BASED_MATCHING'|'ML_BASED_MATCHING'|null $MatchType
 * @property int<1, 15>|null $RuleLevel
 * @property double|null $ConfidenceScore
 * @property string|null $NextToken
 */
class GetSimilarProfilesResponse extends Response
{
}
