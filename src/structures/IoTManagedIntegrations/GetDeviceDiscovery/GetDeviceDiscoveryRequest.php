<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetDeviceDiscovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetDeviceDiscoveryRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
