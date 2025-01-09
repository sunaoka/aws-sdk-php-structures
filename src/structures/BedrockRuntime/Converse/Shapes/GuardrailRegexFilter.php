<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $match
 * @property string $regex
 * @property 'ANONYMIZED'|'BLOCKED' $action
 */
class GuardrailRegexFilter extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     match?: string,
     *     regex?: string,
     *     action: 'ANONYMIZED'|'BLOCKED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
