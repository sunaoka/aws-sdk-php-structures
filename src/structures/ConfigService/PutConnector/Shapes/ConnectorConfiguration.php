<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureConnectorConfiguration|null $azure
 */
class ConnectorConfiguration extends Shape
{
    /**
     * @param array{azure?: AzureConnectorConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
