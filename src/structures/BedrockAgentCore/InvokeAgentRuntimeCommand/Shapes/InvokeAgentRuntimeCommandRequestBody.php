<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeAgentRuntimeCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $command
 * @property int|null $timeout
 */
class InvokeAgentRuntimeCommandRequestBody extends Shape
{
    /**
     * @param array{
     *     command: string,
     *     timeout?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
