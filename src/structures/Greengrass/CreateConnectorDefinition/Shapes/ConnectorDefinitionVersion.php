<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateConnectorDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Connector> $Connectors
 */
class ConnectorDefinitionVersion extends Shape
{
    /**
     * @param array{Connectors?: list<Connector>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
