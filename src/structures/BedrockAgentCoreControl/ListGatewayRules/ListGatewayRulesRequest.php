<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListGatewayRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayIdentifier
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListGatewayRulesRequest extends Request
{
    /**
     * @param array{
     *     gatewayIdentifier: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
