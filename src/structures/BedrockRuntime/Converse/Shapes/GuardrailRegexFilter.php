<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $match
 * @property string|null $regex
 * @property 'ANONYMIZED'|'BLOCKED'|'NONE' $action
 * @property bool|null $detected
 */
class GuardrailRegexFilter extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     match?: string|null,
     *     regex?: string|null,
     *     action: 'ANONYMIZED'|'BLOCKED'|'NONE',
     *     detected?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
