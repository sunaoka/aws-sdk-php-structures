<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property 'UPGRADE_READINESS' $category
 * @property string $kubernetesVersion
 * @property \Aws\Api\DateTimeResult $lastRefreshTime
 * @property \Aws\Api\DateTimeResult $lastTransitionTime
 * @property string $description
 * @property InsightStatus $insightStatus
 * @property string $recommendation
 * @property array<string, string> $additionalInfo
 * @property list<InsightResourceDetail> $resources
 * @property InsightCategorySpecificSummary $categorySpecificSummary
 */
class Insight extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     category?: 'UPGRADE_READINESS',
     *     kubernetesVersion?: string,
     *     lastRefreshTime?: \Aws\Api\DateTimeResult,
     *     lastTransitionTime?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     insightStatus?: InsightStatus,
     *     recommendation?: string,
     *     additionalInfo?: array<string, string>,
     *     resources?: list<InsightResourceDetail>,
     *     categorySpecificSummary?: InsightCategorySpecificSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
