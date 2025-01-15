<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetModelVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $modelVariables
 * @property LabelSchema|null $labelSchema
 */
class TrainingDataSchema extends Shape
{
    /**
     * @param array{
     *     modelVariables: list<string>,
     *     labelSchema?: LabelSchema|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
