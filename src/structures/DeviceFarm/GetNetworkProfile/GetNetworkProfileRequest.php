<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetNetworkProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetNetworkProfileRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
