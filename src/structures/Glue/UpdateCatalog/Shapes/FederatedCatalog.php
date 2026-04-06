<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Identifier
 * @property string|null $ConnectionName
 */
class FederatedCatalog extends Shape
{
    /**
     * @param array{
     *     Identifier?: string|null,
     *     ConnectionName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
