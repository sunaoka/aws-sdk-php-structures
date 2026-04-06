<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationMLInputChannel\Shapes;

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
