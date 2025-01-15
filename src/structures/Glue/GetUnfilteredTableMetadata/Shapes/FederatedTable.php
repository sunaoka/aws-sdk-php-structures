<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredTableMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Identifier
 * @property string|null $DatabaseIdentifier
 * @property string|null $ConnectionName
 */
class FederatedTable extends Shape
{
    /**
     * @param array{
     *     Identifier?: string|null,
     *     DatabaseIdentifier?: string|null,
     *     ConnectionName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
