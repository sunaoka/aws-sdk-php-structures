<?php

namespace Sunaoka\Aws\Structures\NovaAct\CreateAct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ToolInputSchemaDocument|null $json
 */
class ToolInputSchema extends Shape
{
    /**
     * @param array{json?: ToolInputSchemaDocument|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
