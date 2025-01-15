<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetExternalModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TEXT_CSV'|'APPLICATION_JSONLINES' $format
 * @property array<string, string>|null $jsonKeyToVariableMap
 * @property array<string, string>|null $csvIndexToVariableMap
 */
class ModelOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     format: 'TEXT_CSV'|'APPLICATION_JSONLINES',
     *     jsonKeyToVariableMap?: array<string, string>|null,
     *     csvIndexToVariableMap?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
