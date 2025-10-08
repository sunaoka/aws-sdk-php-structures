<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $regex
 * @property string|null $match
 * @property 'BLOCKED'|'ANONYMIZED'|null $action
 */
class GuardrailRegexFilter extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     regex?: string|null,
     *     match?: string|null,
     *     action?: 'BLOCKED'|'ANONYMIZED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
