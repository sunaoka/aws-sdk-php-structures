<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetConnectorDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Connector>|null $Connectors
 */
class ConnectorDefinitionVersion extends Shape
{
    /**
     * @param array{Connectors?: list<Connector>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
