<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelEndpoint
 * @property bool $useEventVariables
 * @property array<string, string> $inputVariables
 * @property array<string, string> $outputVariables
 */
class EvaluatedExternalModel extends Shape
{
    /**
     * @param array{
     *     modelEndpoint?: string,
     *     useEventVariables?: bool,
     *     inputVariables?: array<string, string>,
     *     outputVariables?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
