<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutExternalModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TEXT_CSV'|'APPLICATION_JSONLINES' $format
 * @property array<string, string> $jsonKeyToVariableMap
 * @property array<string, string> $csvIndexToVariableMap
 */
class ModelOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     format: 'TEXT_CSV'|'APPLICATION_JSONLINES',
     *     jsonKeyToVariableMap?: array<string, string>,
     *     csvIndexToVariableMap?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
