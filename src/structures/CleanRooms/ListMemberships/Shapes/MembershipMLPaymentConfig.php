<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MembershipModelTrainingPaymentConfig|null $modelTraining
 * @property MembershipModelInferencePaymentConfig|null $modelInference
 * @property MembershipSyntheticDataGenerationPaymentConfig|null $syntheticDataGeneration
 */
class MembershipMLPaymentConfig extends Shape
{
    /**
     * @param array{
     *     modelTraining?: MembershipModelTrainingPaymentConfig|null,
     *     modelInference?: MembershipModelInferencePaymentConfig|null,
     *     syntheticDataGeneration?: MembershipSyntheticDataGenerationPaymentConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
