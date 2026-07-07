<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'provider'|null $filterName
 * @property list<string>|null $filterValues
 */
class ConnectorFilter extends Shape
{
    /**
     * @param array{
     *     filterName?: 'provider'|null,
     *     filterValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
