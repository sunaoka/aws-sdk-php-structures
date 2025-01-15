<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeQuerySuggestionsConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ENABLED'|'LEARN_ONLY'|null $Mode
 * @property 'ACTIVE'|'UPDATING'|null $Status
 * @property int|null $QueryLogLookBackWindowInDays
 * @property bool|null $IncludeQueriesWithoutUserInformation
 * @property int<1, 10000>|null $MinimumNumberOfQueryingUsers
 * @property int<1, 10000>|null $MinimumQueryCount
 * @property \Aws\Api\DateTimeResult|null $LastSuggestionsBuildTime
 * @property \Aws\Api\DateTimeResult|null $LastClearTime
 * @property int|null $TotalSuggestionsCount
 * @property Shapes\AttributeSuggestionsDescribeConfig|null $AttributeSuggestionsConfig
 */
class DescribeQuerySuggestionsConfigResponse extends Response
{
}
