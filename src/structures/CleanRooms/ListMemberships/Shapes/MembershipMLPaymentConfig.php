<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MembershipModelTrainingPaymentConfig $modelTraining
 * @property MembershipModelInferencePaymentConfig $modelInference
 */
class MembershipMLPaymentConfig extends Shape
{
    /**
     * @param array{
     *     modelTraining?: MembershipModelTrainingPaymentConfig,
     *     modelInference?: MembershipModelInferencePaymentConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
