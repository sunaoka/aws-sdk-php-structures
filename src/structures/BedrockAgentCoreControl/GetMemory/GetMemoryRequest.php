<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetMemory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 */
class GetMemoryRequest extends Request
{
    /**
     * @param array{memoryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
