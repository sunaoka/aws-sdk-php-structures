<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetRulePriorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HttpHeaderName
 * @property list<string>|null $Values
 */
class HttpHeaderConditionConfig extends Shape
{
    /**
     * @param array{
     *     HttpHeaderName?: string|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
