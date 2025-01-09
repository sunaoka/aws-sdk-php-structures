<?php

namespace Sunaoka\Aws\Structures\Iam\GetMFADevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SerialNumber
 * @property string $UserName
 */
class GetMFADeviceRequest extends Request
{
    /**
     * @param array{
     *     SerialNumber: string,
     *     UserName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
