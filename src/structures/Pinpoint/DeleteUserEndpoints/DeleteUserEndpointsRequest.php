<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteUserEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $UserId
 */
class DeleteUserEndpointsRequest extends Request
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
