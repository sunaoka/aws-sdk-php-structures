<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string $policyEngineId
 * @property string|null $targetResourceScope
 */
class ListPoliciesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     policyEngineId: string,
     *     targetResourceScope?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
