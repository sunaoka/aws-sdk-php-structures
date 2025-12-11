<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Regex
 * @property string $Replace
 */
class RewriteConfig extends Shape
{
    /**
     * @param array{
     *     Regex: string,
     *     Replace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
