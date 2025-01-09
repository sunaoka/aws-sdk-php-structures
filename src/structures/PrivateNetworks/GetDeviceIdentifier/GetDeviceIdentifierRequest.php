<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\GetDeviceIdentifier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deviceIdentifierArn
 */
class GetDeviceIdentifierRequest extends Request
{
    /**
     * @param array{deviceIdentifierArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
