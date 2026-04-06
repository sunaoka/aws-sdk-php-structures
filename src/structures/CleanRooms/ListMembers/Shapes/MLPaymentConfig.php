<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelTrainingPaymentConfig|null $modelTraining
 * @property ModelInferencePaymentConfig|null $modelInference
 */
class MLPaymentConfig extends Shape
{
    /**
     * @param array{
     *     modelTraining?: ModelTrainingPaymentConfig|null,
     *     modelInference?: ModelInferencePaymentConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
