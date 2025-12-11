<?php

namespace Sunaoka\Aws\Structures\Athena\GetSessionEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 */
class GetSessionEndpointRequest extends Request
{
    /**
     * @param array{SessionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
