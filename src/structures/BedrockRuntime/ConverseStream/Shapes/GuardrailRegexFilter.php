<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $match
 * @property string|null $regex
 * @property 'ANONYMIZED'|'BLOCKED' $action
 */
class GuardrailRegexFilter extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     match?: string|null,
     *     regex?: string|null,
     *     action: 'ANONYMIZED'|'BLOCKED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
