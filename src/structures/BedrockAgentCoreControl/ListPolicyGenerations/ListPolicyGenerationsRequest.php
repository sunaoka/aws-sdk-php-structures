<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPolicyGenerations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string $policyEngineId
 */
class ListPolicyGenerationsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     policyEngineId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
