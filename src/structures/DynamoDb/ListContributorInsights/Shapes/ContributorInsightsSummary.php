<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListContributorInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TableName
 * @property string|null $IndexName
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'FAILED'|null $ContributorInsightsStatus
 */
class ContributorInsightsSummary extends Shape
{
    /**
     * @param array{
     *     TableName?: string|null,
     *     IndexName?: string|null,
     *     ContributorInsightsStatus?: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
