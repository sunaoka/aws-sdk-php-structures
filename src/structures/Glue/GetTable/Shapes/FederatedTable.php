<?php

namespace Sunaoka\Aws\Structures\Glue\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Identifier
 * @property string|null $DatabaseIdentifier
 * @property string|null $ConnectionName
 * @property string|null $ConnectionType
 */
class FederatedTable extends Shape
{
    /**
     * @param array{
     *     Identifier?: string|null,
     *     DatabaseIdentifier?: string|null,
     *     ConnectionName?: string|null,
     *     ConnectionType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
