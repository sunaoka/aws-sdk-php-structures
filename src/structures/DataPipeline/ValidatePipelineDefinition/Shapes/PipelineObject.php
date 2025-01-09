<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ValidatePipelineDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property list<Field> $fields
 */
class PipelineObject extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     fields: list<Field>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
