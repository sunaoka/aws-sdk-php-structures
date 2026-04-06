<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetConnectorDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetConnectorDestinationRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
