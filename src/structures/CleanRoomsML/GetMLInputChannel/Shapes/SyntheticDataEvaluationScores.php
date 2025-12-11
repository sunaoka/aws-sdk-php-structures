<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetMLInputChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataPrivacyScores $dataPrivacyScores
 */
class SyntheticDataEvaluationScores extends Shape
{
    /**
     * @param array{dataPrivacyScores: DataPrivacyScores} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
