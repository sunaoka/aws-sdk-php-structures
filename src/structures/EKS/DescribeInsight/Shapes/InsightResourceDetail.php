<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InsightStatus $insightStatus
 * @property string $kubernetesResourceUri
 * @property string $arn
 */
class InsightResourceDetail extends Shape
{
    /**
     * @param array{
     *     insightStatus?: InsightStatus,
     *     kubernetesResourceUri?: string,
     *     arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
