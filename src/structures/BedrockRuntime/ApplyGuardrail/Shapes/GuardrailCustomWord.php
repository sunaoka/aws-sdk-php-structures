<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $match
 * @property 'BLOCKED' $action
 */
class GuardrailCustomWord extends Shape
{
    /**
     * @param array{
     *     match: string,
     *     action: 'BLOCKED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
