<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListInvocationSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $invocationIdentifier
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 * @property string $sessionIdentifier
 */
class ListInvocationStepsRequest extends Request
{
    /**
     * @param array{
     *     invocationIdentifier?: string|null,
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
