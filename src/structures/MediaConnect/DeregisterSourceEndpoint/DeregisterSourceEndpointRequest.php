<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeregisterSourceEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DeregisterSourceEndpointRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
