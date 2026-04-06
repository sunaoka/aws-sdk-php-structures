<?php

namespace Sunaoka\Aws\Structures\mgn\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $connectorIDs
 */
class ListConnectorsRequestFilters extends Shape
{
    /**
     * @param array{connectorIDs?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
