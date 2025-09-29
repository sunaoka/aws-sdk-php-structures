<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $resourceGatewayIdentifier
 * @property string|null $resourceConfigurationGroupIdentifier
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListResourceConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     resourceGatewayIdentifier?: string|null,
     *     resourceConfigurationGroupIdentifier?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
