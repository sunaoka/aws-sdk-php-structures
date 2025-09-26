<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\UpdateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $sessionMetadata
 * @property string $sessionIdentifier
 */
class UpdateSessionRequest extends Request
{
    /**
     * @param array{
     *     sessionMetadata?: array<string, string>|null,
     *     sessionIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
