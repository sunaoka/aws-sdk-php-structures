<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateContributorInsights;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TableName
 * @property string|null $IndexName
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'FAILED'|null $ContributorInsightsStatus
 */
class UpdateContributorInsightsResponse extends Response
{
}
