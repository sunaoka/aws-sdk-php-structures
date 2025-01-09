<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ActivateDeviceIdentifier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $deviceIdentifierArn
 */
class ActivateDeviceIdentifierRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     deviceIdentifierArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
