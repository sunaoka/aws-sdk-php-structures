<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\CreateHsm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $AvailabilityZone
 * @property string $IpAddress
 */
class CreateHsmRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     AvailabilityZone: string,
     *     IpAddress?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
