<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeQuerySuggestionsConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ENABLED'|'LEARN_ONLY' $Mode
 * @property 'ACTIVE'|'UPDATING' $Status
 * @property int $QueryLogLookBackWindowInDays
 * @property bool $IncludeQueriesWithoutUserInformation
 * @property int<1, 10000> $MinimumNumberOfQueryingUsers
 * @property int<1, 10000> $MinimumQueryCount
 * @property \Aws\Api\DateTimeResult $LastSuggestionsBuildTime
 * @property \Aws\Api\DateTimeResult $LastClearTime
 * @property int $TotalSuggestionsCount
 * @property Shapes\AttributeSuggestionsDescribeConfig $AttributeSuggestionsConfig
 */
class DescribeQuerySuggestionsConfigResponse extends Response
{
}
