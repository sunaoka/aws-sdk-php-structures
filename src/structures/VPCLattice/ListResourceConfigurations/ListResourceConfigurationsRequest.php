<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $resourceConfigurationGroupIdentifier
 * @property string|null $resourceGatewayIdentifier
 */
class ListResourceConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     resourceConfigurationGroupIdentifier?: string|null,
     *     resourceGatewayIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
