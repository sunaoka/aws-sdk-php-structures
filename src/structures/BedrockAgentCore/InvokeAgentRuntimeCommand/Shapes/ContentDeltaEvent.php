<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeAgentRuntimeCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stdout
 * @property string|null $stderr
 */
class ContentDeltaEvent extends Shape
{
    /**
     * @param array{
     *     stdout?: string|null,
     *     stderr?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
