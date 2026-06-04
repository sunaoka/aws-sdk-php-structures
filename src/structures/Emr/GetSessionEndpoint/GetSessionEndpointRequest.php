<?php

namespace Sunaoka\Aws\Structures\Emr\GetSessionEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $SessionId
 */
class GetSessionEndpointRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     SessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
