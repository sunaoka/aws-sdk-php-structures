<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetMLInputChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $epsilon
 * @property double $maxMembershipInferenceAttackScore
 * @property ColumnClassificationDetails|null $columnClassification
 */
class MLSyntheticDataParameters extends Shape
{
    /**
     * @param array{
     *     epsilon: double,
     *     maxMembershipInferenceAttackScore: double,
     *     columnClassification?: ColumnClassificationDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
