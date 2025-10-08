<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteMemory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $memoryId
 */
class DeleteMemoryRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     memoryId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
