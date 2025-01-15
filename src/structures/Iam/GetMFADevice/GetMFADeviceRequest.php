<?php

namespace Sunaoka\Aws\Structures\Iam\GetMFADevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SerialNumber
 * @property string|null $UserName
 */
class GetMFADeviceRequest extends Request
{
    /**
     * @param array{
     *     SerialNumber: string,
     *     UserName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
