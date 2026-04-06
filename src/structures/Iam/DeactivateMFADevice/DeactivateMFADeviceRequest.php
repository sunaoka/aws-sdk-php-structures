<?php

namespace Sunaoka\Aws\Structures\Iam\DeactivateMFADevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserName
 * @property string $SerialNumber
 */
class DeactivateMFADeviceRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     SerialNumber: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
