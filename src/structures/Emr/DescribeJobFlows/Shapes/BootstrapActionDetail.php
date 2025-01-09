<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BootstrapActionConfig $BootstrapActionConfig
 */
class BootstrapActionDetail extends Shape
{
    /**
     * @param array{BootstrapActionConfig?: BootstrapActionConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
