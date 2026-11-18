<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureConnectorConfiguration|null $Azure
 */
class ConnectorConfiguration extends Shape
{
    /**
     * @param array{Azure?: AzureConnectorConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
