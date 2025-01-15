<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\CreateHsm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $AvailabilityZone
 * @property string|null $IpAddress
 */
class CreateHsmRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     AvailabilityZone: string,
     *     IpAddress?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
