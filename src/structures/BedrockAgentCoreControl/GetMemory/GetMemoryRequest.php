<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetMemory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 * @property 'full'|'without_decryption'|null $view
 */
class GetMemoryRequest extends Request
{
    /**
     * @param array{
     *     memoryId: string,
     *     view?: 'full'|'without_decryption'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
