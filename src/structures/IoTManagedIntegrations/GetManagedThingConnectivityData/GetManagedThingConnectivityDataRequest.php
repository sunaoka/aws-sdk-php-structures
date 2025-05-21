<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetManagedThingConnectivityData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetManagedThingConnectivityDataRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
