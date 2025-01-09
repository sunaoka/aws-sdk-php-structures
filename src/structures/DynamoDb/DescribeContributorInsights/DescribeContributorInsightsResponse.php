<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeContributorInsights;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TableName
 * @property string $IndexName
 * @property list<string> $ContributorInsightsRuleList
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'FAILED' $ContributorInsightsStatus
 * @property \Aws\Api\DateTimeResult $LastUpdateDateTime
 * @property Shapes\FailureException $FailureException
 */
class DescribeContributorInsightsResponse extends Response
{
}
