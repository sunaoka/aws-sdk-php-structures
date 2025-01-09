<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelTrainingPaymentConfig $modelTraining
 * @property ModelInferencePaymentConfig $modelInference
 */
class MLPaymentConfig extends Shape
{
    /**
     * @param array{
     *     modelTraining?: ModelTrainingPaymentConfig,
     *     modelInference?: ModelInferencePaymentConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
