<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ValidatePipelineDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property list<string>|null $warnings
 */
class ValidationWarning extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     warnings?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
