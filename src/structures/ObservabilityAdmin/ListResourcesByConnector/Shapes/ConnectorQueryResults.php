<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourcesByConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureConnectorQueryResults|null $Azure
 */
class ConnectorQueryResults extends Shape
{
    /**
     * @param array{Azure?: AzureConnectorQueryResults|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
