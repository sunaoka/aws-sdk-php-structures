<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BLOCKED'|'ANONYMIZED'|null $action
 * @property string|null $match
 * @property string|null $name
 * @property string|null $regex
 */
class GuardrailRegexFilter extends Shape
{
    /**
     * @param array{
     *     action?: 'BLOCKED'|'ANONYMIZED'|null,
     *     match?: string|null,
     *     name?: string|null,
     *     regex?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
