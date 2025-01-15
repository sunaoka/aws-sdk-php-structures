<?php

namespace Sunaoka\Aws\Structures\Appflow\ListConnectorEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $label
 * @property bool|null $hasNestedEntities
 */
class ConnectorEntity extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     label?: string|null,
     *     hasNestedEntities?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
