<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\InstallToRemoteAccessSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $remoteAccessSessionArn
 * @property string $appArn
 */
class InstallToRemoteAccessSessionRequest extends Request
{
    /**
     * @param array{
     *     remoteAccessSessionArn: string,
     *     appArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
