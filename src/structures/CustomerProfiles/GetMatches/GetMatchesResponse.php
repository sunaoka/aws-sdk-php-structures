<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetMatches;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property \Aws\Api\DateTimeResult|null $MatchGenerationDate
 * @property int<0, max>|null $PotentialMatches
 * @property list<Shapes\MatchItem>|null $Matches
 */
class GetMatchesResponse extends Response
{
}
