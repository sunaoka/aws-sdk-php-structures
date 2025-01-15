<?php

namespace Sunaoka\Aws\Structures\DataPipeline\PutPipelineDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property list<string>|null $errors
 */
class ValidationError extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     errors?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
