<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeContributorInsights;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TableName
 * @property string|null $IndexName
 * @property list<string>|null $ContributorInsightsRuleList
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'FAILED'|null $ContributorInsightsStatus
 * @property \Aws\Api\DateTimeResult|null $LastUpdateDateTime
 * @property Shapes\FailureException|null $FailureException
 * @property 'ACCESSED_AND_THROTTLED_KEYS'|'THROTTLED_KEYS'|null $ContributorInsightsMode
 */
class DescribeContributorInsightsResponse extends Response
{
}
