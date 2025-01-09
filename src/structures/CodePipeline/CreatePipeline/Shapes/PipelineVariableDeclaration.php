<?php

namespace Sunaoka\Aws\Structures\CodePipeline\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $defaultValue
 * @property string $description
 */
class PipelineVariableDeclaration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     defaultValue?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
