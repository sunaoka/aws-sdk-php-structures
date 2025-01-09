<?php

namespace Sunaoka\Aws\Structures\EventBridge\DeleteEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteEndpointRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
