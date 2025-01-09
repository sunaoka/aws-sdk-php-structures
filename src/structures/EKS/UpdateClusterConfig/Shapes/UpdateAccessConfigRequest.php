<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateClusterConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'API'|'API_AND_CONFIG_MAP'|'CONFIG_MAP' $authenticationMode
 */
class UpdateAccessConfigRequest extends Shape
{
    /**
     * @param array{authenticationMode?: 'API'|'API_AND_CONFIG_MAP'|'CONFIG_MAP'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
