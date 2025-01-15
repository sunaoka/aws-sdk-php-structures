<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BootstrapActionConfig|null $BootstrapActionConfig
 */
class BootstrapActionDetail extends Shape
{
    /**
     * @param array{BootstrapActionConfig?: BootstrapActionConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
