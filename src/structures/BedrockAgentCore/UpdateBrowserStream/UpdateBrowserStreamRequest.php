<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\UpdateBrowserStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $browserIdentifier
 * @property string $sessionId
 * @property Shapes\StreamUpdate $streamUpdate
 * @property string|null $clientToken
 */
class UpdateBrowserStreamRequest extends Request
{
    /**
     * @param array{
     *     browserIdentifier: string,
     *     sessionId: string,
     *     streamUpdate: Shapes\StreamUpdate,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
