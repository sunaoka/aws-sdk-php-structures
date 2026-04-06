<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $match
 * @property 'BLOCKED'|'NONE' $action
 * @property bool|null $detected
 */
class GuardrailCustomWord extends Shape
{
    /**
     * @param array{
     *     match: string,
     *     action: 'BLOCKED'|'NONE',
     *     detected?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
