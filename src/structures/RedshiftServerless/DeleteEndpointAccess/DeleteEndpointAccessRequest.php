<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $endpointName
 */
class DeleteEndpointAccessRequest extends Request
{
    /**
     * @param array{endpointName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
