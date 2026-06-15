<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeGuardrailChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'user'|'assistant'|'system' $role
 * @property list<GuardrailChecksContentBlock> $content
 */
class GuardrailChecksMessage extends Shape
{
    /**
     * @param array{
     *     role: 'user'|'assistant'|'system',
     *     content: list<GuardrailChecksContentBlock>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
