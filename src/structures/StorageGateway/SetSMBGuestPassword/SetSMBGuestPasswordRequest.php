<?php

namespace Sunaoka\Aws\Structures\StorageGateway\SetSMBGuestPassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property string $Password
 */
class SetSMBGuestPasswordRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     Password: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
