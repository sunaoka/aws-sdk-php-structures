<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PublicSourceEndpointNetworkingConfigurationAllowRule> $SourceAllowRules
 */
class PublicSourceEndpointNetworkingConfiguration extends Shape
{
    /**
     * @param array{SourceAllowRules: list<PublicSourceEndpointNetworkingConfigurationAllowRule>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
