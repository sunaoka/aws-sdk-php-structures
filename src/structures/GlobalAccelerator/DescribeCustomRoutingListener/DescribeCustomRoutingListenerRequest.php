<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeCustomRoutingListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 */
class DescribeCustomRoutingListenerRequest extends Request
{
    /**
     * @param array{ListenerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
