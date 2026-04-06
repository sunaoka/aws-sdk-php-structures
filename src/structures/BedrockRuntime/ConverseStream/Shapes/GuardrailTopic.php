<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'DENY' $type
 * @property 'BLOCKED' $action
 */
class GuardrailTopic extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'DENY',
     *     action: 'BLOCKED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
