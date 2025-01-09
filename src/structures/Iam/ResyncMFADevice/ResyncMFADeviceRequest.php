<?php

namespace Sunaoka\Aws\Structures\Iam\ResyncMFADevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $SerialNumber
 * @property string $AuthenticationCode1
 * @property string $AuthenticationCode2
 */
class ResyncMFADeviceRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     SerialNumber: string,
     *     AuthenticationCode1: string,
     *     AuthenticationCode2: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
