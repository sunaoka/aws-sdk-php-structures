<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteConnectorDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteConnectorDestinationRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
