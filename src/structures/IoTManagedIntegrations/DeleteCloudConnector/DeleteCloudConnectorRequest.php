<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteCloudConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteCloudConnectorRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
