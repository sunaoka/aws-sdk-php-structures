<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectorProperty|null $Url
 * @property list<ConnectorProperty>|null $AdditionalRequestParameters
 */
class ConnectionPropertiesConfiguration extends Shape
{
    /**
     * @param array{
     *     Url?: ConnectorProperty|null,
     *     AdditionalRequestParameters?: list<ConnectorProperty>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
