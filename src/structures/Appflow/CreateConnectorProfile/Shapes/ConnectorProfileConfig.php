<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectorProfileProperties $connectorProfileProperties
 * @property ConnectorProfileCredentials|null $connectorProfileCredentials
 */
class ConnectorProfileConfig extends Shape
{
    /**
     * @param array{
     *     connectorProfileProperties: ConnectorProfileProperties,
     *     connectorProfileCredentials?: ConnectorProfileCredentials|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
