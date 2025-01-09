<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateContributorInsights;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TableName
 * @property string $IndexName
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'FAILED' $ContributorInsightsStatus
 */
class UpdateContributorInsightsResponse extends Response
{
}
