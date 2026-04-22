<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetSessionEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $sessionId
 */
class GetSessionEndpointRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
