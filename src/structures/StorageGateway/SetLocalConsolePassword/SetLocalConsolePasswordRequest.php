<?php

namespace Sunaoka\Aws\Structures\StorageGateway\SetLocalConsolePassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property string $LocalConsolePassword
 */
class SetLocalConsolePasswordRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     LocalConsolePassword: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
