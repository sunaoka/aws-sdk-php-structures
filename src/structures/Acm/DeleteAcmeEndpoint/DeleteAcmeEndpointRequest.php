<?php

namespace Sunaoka\Aws\Structures\Acm\DeleteAcmeEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcmeEndpointArn
 */
class DeleteAcmeEndpointRequest extends Request
{
    /**
     * @param array{AcmeEndpointArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
