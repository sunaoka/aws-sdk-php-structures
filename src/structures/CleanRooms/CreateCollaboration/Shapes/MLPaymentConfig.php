<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateCollaboration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelTrainingPaymentConfig|null $modelTraining
 * @property ModelInferencePaymentConfig|null $modelInference
 * @property SyntheticDataGenerationPaymentConfig|null $syntheticDataGeneration
 */
class MLPaymentConfig extends Shape
{
    /**
     * @param array{
     *     modelTraining?: ModelTrainingPaymentConfig|null,
     *     modelInference?: ModelInferencePaymentConfig|null,
     *     syntheticDataGeneration?: SyntheticDataGenerationPaymentConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
