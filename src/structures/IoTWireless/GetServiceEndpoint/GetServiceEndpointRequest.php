<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetServiceEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CUPS'|'LNS' $ServiceType
 */
class GetServiceEndpointRequest extends Request
{
    /**
     * @param array{ServiceType?: 'CUPS'|'LNS'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
