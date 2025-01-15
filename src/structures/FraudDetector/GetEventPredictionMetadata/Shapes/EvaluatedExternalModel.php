<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $modelEndpoint
 * @property bool|null $useEventVariables
 * @property array<string, string>|null $inputVariables
 * @property array<string, string>|null $outputVariables
 */
class EvaluatedExternalModel extends Shape
{
    /**
     * @param array{
     *     modelEndpoint?: string|null,
     *     useEventVariables?: bool|null,
     *     inputVariables?: array<string, string>|null,
     *     outputVariables?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
