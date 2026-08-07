<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListAgentRuntimeVersionsByCapacityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $capacityProviderId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListAgentRuntimeVersionsByCapacityProviderRequest extends Request
{
    /**
     * @param array{
     *     capacityProviderId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
