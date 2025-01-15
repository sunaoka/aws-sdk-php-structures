<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetServiceEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CUPS'|'LNS'|null $ServiceType
 */
class GetServiceEndpointRequest extends Request
{
    /**
     * @param array{ServiceType?: 'CUPS'|'LNS'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
