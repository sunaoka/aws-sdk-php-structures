<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetDestinationEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PublicDestinationEndpointNetworkingConfigurationAllowRule> $DestinationAllowRules
 */
class PublicDestinationEndpointNetworkingConfiguration extends Shape
{
    /**
     * @param array{DestinationAllowRules: list<PublicDestinationEndpointNetworkingConfigurationAllowRule>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
