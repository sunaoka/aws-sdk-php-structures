<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 */
class DeleteEndpointAccessRequest extends Request
{
    /**
     * @param array{EndpointName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
