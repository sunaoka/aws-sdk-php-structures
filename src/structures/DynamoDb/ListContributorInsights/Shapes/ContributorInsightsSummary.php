<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListContributorInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableName
 * @property string $IndexName
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'FAILED' $ContributorInsightsStatus
 */
class ContributorInsightsSummary extends Shape
{
    /**
     * @param array{
     *     TableName?: string,
     *     IndexName?: string,
     *     ContributorInsightsStatus?: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
