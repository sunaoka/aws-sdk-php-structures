<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListConnectorDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $CloudConnectorId
 * @property string|null $Id
 */
class ConnectorDestinationSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     CloudConnectorId?: string|null,
     *     Id?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
