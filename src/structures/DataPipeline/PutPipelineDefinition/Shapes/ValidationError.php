<?php

namespace Sunaoka\Aws\Structures\DataPipeline\PutPipelineDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property list<string> $errors
 */
class ValidationError extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     errors?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
