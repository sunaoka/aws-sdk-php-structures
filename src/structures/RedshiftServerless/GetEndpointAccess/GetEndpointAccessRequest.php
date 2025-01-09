<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $endpointName
 */
class GetEndpointAccessRequest extends Request
{
    /**
     * @param array{endpointName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
