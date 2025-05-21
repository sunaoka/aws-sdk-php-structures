<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelCustomizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ValidationDetails|null $validationDetails
 * @property DataProcessingDetails|null $dataProcessingDetails
 * @property TrainingDetails|null $trainingDetails
 */
class StatusDetails extends Shape
{
    /**
     * @param array{
     *     validationDetails?: ValidationDetails|null,
     *     dataProcessingDetails?: DataProcessingDetails|null,
     *     trainingDetails?: TrainingDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
