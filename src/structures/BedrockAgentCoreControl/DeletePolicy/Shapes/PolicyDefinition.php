<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeletePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CedarPolicy|null $cedar
 */
class PolicyDefinition extends Shape
{
    /**
     * @param array{cedar?: CedarPolicy|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
