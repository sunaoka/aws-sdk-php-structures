<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Explainability
 * @property string $ModelInsights
 * @property string $BacktestResults
 */
class CandidateArtifactLocations extends Shape
{
    /**
     * @param array{
     *     Explainability: string,
     *     ModelInsights?: string,
     *     BacktestResults?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
