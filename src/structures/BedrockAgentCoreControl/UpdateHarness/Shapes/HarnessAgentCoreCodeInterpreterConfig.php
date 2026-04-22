<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $codeInterpreterArn
 */
class HarnessAgentCoreCodeInterpreterConfig extends Shape
{
    /**
     * @param array{codeInterpreterArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
