<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $statement
 */
class CedarPolicy extends Shape
{
    /**
     * @param array{statement: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
