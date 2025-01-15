<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property 'UPGRADE_READINESS'|null $category
 * @property string|null $kubernetesVersion
 * @property \Aws\Api\DateTimeResult|null $lastRefreshTime
 * @property \Aws\Api\DateTimeResult|null $lastTransitionTime
 * @property string|null $description
 * @property InsightStatus|null $insightStatus
 * @property string|null $recommendation
 * @property array<string, string>|null $additionalInfo
 * @property list<InsightResourceDetail>|null $resources
 * @property InsightCategorySpecificSummary|null $categorySpecificSummary
 */
class Insight extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     category?: 'UPGRADE_READINESS'|null,
     *     kubernetesVersion?: string|null,
     *     lastRefreshTime?: \Aws\Api\DateTimeResult|null,
     *     lastTransitionTime?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     insightStatus?: InsightStatus|null,
     *     recommendation?: string|null,
     *     additionalInfo?: array<string, string>|null,
     *     resources?: list<InsightResourceDetail>|null,
     *     categorySpecificSummary?: InsightCategorySpecificSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
