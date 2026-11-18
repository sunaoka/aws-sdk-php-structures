<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourcesByConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureConnectorQuery|null $Azure
 */
class ConnectorQuery extends Shape
{
    /**
     * @param array{Azure?: AzureConnectorQuery|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
