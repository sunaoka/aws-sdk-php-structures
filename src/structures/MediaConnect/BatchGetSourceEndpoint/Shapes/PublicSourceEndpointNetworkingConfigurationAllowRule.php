<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 */
class PublicSourceEndpointNetworkingConfigurationAllowRule extends Shape
{
    /**
     * @param array{Cidr: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
