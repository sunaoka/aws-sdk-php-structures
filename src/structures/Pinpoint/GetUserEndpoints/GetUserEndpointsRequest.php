<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetUserEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $UserId
 */
class GetUserEndpointsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     UserId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
