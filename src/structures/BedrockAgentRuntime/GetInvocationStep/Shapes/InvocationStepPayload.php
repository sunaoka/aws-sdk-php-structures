<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetInvocationStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BedrockSessionContentBlock>|null $contentBlocks
 */
class InvocationStepPayload extends Shape
{
    /**
     * @param array{contentBlocks?: list<BedrockSessionContentBlock>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
