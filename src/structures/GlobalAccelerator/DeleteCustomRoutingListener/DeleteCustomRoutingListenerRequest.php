<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DeleteCustomRoutingListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 */
class DeleteCustomRoutingListenerRequest extends Request
{
    /**
     * @param array{ListenerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
