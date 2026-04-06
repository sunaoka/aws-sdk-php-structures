<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetMLInputChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MembershipInferenceAttackScore> $membershipInferenceAttackScores
 */
class DataPrivacyScores extends Shape
{
    /**
     * @param array{membershipInferenceAttackScores: list<MembershipInferenceAttackScore>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
