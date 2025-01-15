<?php

namespace Sunaoka\Aws\Structures\EKS\ListInsights\Shapes;

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
 */
class InsightSummary extends Shape
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
     *     insightStatus?: InsightStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
