<?php

namespace Sunaoka\Aws\Structures\QApps\DisassociateQAppFromUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $appId
 */
class DisassociateQAppFromUserRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     appId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
