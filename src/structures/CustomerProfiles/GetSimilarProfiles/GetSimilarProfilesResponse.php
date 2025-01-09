<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSimilarProfiles;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $ProfileIds
 * @property string $MatchId
 * @property 'RULE_BASED_MATCHING'|'ML_BASED_MATCHING' $MatchType
 * @property int<1, 15> $RuleLevel
 * @property double $ConfidenceScore
 * @property string $NextToken
 */
class GetSimilarProfilesResponse extends Response
{
}
