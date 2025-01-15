<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Explainability
 * @property string|null $ModelInsights
 * @property string|null $BacktestResults
 */
class CandidateArtifactLocations extends Shape
{
    /**
     * @param array{
     *     Explainability: string,
     *     ModelInsights?: string|null,
     *     BacktestResults?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
