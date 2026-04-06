<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\ClaimDevicesByClaimCode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClaimCode
 */
class ClaimDevicesByClaimCodeRequest extends Request
{
    /**
     * @param array{ClaimCode: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
