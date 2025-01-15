<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InsightStatus|null $insightStatus
 * @property string|null $kubernetesResourceUri
 * @property string|null $arn
 */
class InsightResourceDetail extends Shape
{
    /**
     * @param array{
     *     insightStatus?: InsightStatus|null,
     *     kubernetesResourceUri?: string|null,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
