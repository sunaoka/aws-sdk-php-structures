<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MembershipModelTrainingPaymentConfig|null $modelTraining
 * @property MembershipModelInferencePaymentConfig|null $modelInference
 */
class MembershipMLPaymentConfig extends Shape
{
    /**
     * @param array{
     *     modelTraining?: MembershipModelTrainingPaymentConfig|null,
     *     modelInference?: MembershipModelInferencePaymentConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
