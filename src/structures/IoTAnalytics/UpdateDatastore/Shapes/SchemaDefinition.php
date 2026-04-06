<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Column>|null $columns
 */
class SchemaDefinition extends Shape
{
    /**
     * @param array{columns?: list<Column>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
