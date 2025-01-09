<?php

namespace Sunaoka\Aws\Structures\EKS\ListInsights\Shapes;

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
 */
class InsightSummary extends Shape
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
     *     insightStatus?: InsightStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
