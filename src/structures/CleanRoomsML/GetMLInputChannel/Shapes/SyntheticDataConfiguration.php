<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetMLInputChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MLSyntheticDataParameters $syntheticDataParameters
 * @property SyntheticDataEvaluationScores|null $syntheticDataEvaluationScores
 */
class SyntheticDataConfiguration extends Shape
{
    /**
     * @param array{
     *     syntheticDataParameters: MLSyntheticDataParameters,
     *     syntheticDataEvaluationScores?: SyntheticDataEvaluationScores|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
