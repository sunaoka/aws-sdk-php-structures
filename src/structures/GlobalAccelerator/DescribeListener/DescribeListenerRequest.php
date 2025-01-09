<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 */
class DescribeListenerRequest extends Request
{
    /**
     * @param array{ListenerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
