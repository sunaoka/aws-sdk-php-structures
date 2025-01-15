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
 */
class DescribeContributorInsightsResponse extends Response
{
}
