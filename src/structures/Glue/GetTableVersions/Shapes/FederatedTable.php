<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Identifier
 * @property string $DatabaseIdentifier
 * @property string $ConnectionName
 */
class FederatedTable extends Shape
{
    /**
     * @param array{
     *     Identifier?: string,
     *     DatabaseIdentifier?: string,
     *     ConnectionName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
