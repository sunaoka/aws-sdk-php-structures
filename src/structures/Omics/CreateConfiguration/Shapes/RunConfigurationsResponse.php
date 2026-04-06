<?php

namespace Sunaoka\Aws\Structures\Omics\CreateConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VpcConfigResponse|null $vpcConfig
 */
class RunConfigurationsResponse extends Shape
{
    /**
     * @param array{vpcConfig?: VpcConfigResponse|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
