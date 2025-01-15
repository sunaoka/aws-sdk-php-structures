<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeElasticLoadBalancers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StackId
 * @property list<string>|null $LayerIds
 */
class DescribeElasticLoadBalancersRequest extends Request
{
    /**
     * @param array{
     *     StackId?: string|null,
     *     LayerIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
