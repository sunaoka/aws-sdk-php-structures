<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DeleteListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 */
class DeleteListenerRequest extends Request
{
    /**
     * @param array{ListenerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
