<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeElasticLoadBalancers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property list<string> $LayerIds
 */
class DescribeElasticLoadBalancersRequest extends Request
{
    /**
     * @param array{
     *     StackId?: string,
     *     LayerIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
