<?php

namespace Sunaoka\Aws\Structures\Omics\CreateConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VpcConfig|null $vpcConfig
 */
class RunConfigurations extends Shape
{
    /**
     * @param array{vpcConfig?: VpcConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
