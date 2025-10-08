<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetCloudConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetCloudConnectorRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
