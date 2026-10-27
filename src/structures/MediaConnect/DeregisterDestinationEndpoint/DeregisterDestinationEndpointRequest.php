<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeregisterDestinationEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DeregisterDestinationEndpointRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
