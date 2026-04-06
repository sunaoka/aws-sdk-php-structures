<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetMLInputChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISTANCE_TO_CLOSEST_RECORD_V1' $attackVersion
 * @property double $score
 */
class MembershipInferenceAttackScore extends Shape
{
    /**
     * @param array{
     *     attackVersion: 'DISTANCE_TO_CLOSEST_RECORD_V1',
     *     score: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
