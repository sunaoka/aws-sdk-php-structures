<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteVirtualMFADevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SerialNumber
 */
class DeleteVirtualMFADeviceRequest extends Request
{
    /**
     * @param array{SerialNumber: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
