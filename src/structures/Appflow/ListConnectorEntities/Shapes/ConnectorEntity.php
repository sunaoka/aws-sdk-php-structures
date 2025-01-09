<?php

namespace Sunaoka\Aws\Structures\Appflow\ListConnectorEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $label
 * @property bool $hasNestedEntities
 */
class ConnectorEntity extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     label?: string,
     *     hasNestedEntities?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
