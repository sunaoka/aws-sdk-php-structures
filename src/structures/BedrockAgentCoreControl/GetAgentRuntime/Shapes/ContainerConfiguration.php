<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $containerUri
 */
class ContainerConfiguration extends Shape
{
    /**
     * @param array{containerUri: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
