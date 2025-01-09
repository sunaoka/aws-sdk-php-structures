<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetMatches;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NextToken
 * @property \Aws\Api\DateTimeResult $MatchGenerationDate
 * @property int $PotentialMatches
 * @property list<Shapes\MatchItem> $Matches
 */
class GetMatchesResponse extends Response
{
}
