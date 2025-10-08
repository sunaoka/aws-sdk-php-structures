<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListGatewayTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayIdentifier
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListGatewayTargetsRequest extends Request
{
    /**
     * @param array{
     *     gatewayIdentifier: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
