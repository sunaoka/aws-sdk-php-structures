<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\CreateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $sessionMetadata
 * @property string|null $encryptionKeyArn
 * @property array<string, string>|null $tags
 */
class CreateSessionRequest extends Request
{
    /**
     * @param array{
     *     sessionMetadata?: array<string, string>|null,
     *     encryptionKeyArn?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
