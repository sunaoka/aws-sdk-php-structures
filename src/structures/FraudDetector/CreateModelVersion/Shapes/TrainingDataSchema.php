<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateModelVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $modelVariables
 * @property LabelSchema $labelSchema
 */
class TrainingDataSchema extends Shape
{
    /**
     * @param array{
     *     modelVariables: list<string>,
     *     labelSchema?: LabelSchema
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
