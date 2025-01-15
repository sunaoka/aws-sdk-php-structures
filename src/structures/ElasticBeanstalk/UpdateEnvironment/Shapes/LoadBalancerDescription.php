<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LoadBalancerName
 * @property string|null $Domain
 * @property list<Listener>|null $Listeners
 */
class LoadBalancerDescription extends Shape
{
    /**
     * @param array{
     *     LoadBalancerName?: string|null,
     *     Domain?: string|null,
     *     Listeners?: list<Listener>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
