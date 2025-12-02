<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\CreateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $encryptionKeyArn
 * @property array<string, string>|null $sessionMetadata
 * @property array<string, string>|null $tags
 */
class CreateSessionRequest extends Request
{
    /**
     * @param array{
     *     encryptionKeyArn?: string|null,
     *     sessionMetadata?: array<string, string>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
