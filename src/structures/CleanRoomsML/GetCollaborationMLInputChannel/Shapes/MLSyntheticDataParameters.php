<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationMLInputChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $epsilon
 * @property double $maxMembershipInferenceAttackScore
 * @property ColumnClassificationDetails $columnClassification
 */
class MLSyntheticDataParameters extends Shape
{
    /**
     * @param array{
     *     epsilon: double,
     *     maxMembershipInferenceAttackScore: double,
     *     columnClassification: ColumnClassificationDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
