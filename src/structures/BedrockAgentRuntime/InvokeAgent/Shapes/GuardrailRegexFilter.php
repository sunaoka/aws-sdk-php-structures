<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BLOCKED'|'ANONYMIZED' $action
 * @property string $match
 * @property string $name
 * @property string $regex
 */
class GuardrailRegexFilter extends Shape
{
    /**
     * @param array{
     *     action?: 'BLOCKED'|'ANONYMIZED',
     *     match?: string,
     *     name?: string,
     *     regex?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
