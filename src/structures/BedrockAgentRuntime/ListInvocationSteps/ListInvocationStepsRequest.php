<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListInvocationSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $invocationIdentifier
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string $sessionIdentifier
 */
class ListInvocationStepsRequest extends Request
{
    /**
     * @param array{
     *     invocationIdentifier?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     sessionIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
