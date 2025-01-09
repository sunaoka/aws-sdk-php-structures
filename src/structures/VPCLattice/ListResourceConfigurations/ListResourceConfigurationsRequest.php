<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $resourceConfigurationGroupIdentifier
 * @property string $resourceGatewayIdentifier
 */
class ListResourceConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     resourceConfigurationGroupIdentifier?: string,
     *     resourceGatewayIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
