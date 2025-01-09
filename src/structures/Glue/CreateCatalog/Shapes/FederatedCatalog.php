<?php

namespace Sunaoka\Aws\Structures\Glue\CreateCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Identifier
 * @property string $ConnectionName
 */
class FederatedCatalog extends Shape
{
    /**
     * @param array{
     *     Identifier?: string,
     *     ConnectionName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
