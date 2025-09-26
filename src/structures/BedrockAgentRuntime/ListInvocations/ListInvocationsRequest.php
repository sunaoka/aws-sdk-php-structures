<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListInvocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 * @property string $sessionIdentifier
 */
class ListInvocationsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     sessionIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
