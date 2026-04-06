<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'DENY' $type
 * @property 'BLOCKED'|'NONE' $action
 * @property bool|null $detected
 */
class GuardrailTopic extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'DENY',
     *     action: 'BLOCKED'|'NONE',
     *     detected?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
