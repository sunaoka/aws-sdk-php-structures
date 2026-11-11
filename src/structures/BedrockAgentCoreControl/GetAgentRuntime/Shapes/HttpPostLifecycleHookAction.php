<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 * @property int<8000, 12000>|null $port
 */
class HttpPostLifecycleHookAction extends Shape
{
    /**
     * @param array{
     *     path: string,
     *     port?: int<8000, 12000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
