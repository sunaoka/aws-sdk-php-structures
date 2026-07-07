<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS' $comparison
 * @property 'CUSTOMER_MANAGED'|'SERVICE_LINKED' $value
 */
class ConnectorTypeFilter extends Shape
{
    /**
     * @param array{
     *     comparison: 'EQUALS',
     *     value: 'CUSTOMER_MANAGED'|'SERVICE_LINKED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
