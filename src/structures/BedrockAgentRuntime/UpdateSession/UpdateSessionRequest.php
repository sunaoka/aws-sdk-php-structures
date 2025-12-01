<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\UpdateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sessionIdentifier
 * @property array<string, string>|null $sessionMetadata
 */
class UpdateSessionRequest extends Request
{
    /**
     * @param array{
     *     sessionIdentifier: string,
     *     sessionMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
