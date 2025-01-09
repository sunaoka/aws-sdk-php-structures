<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Identifier
 * @property string $ConnectionName
 */
class FederatedDatabase extends Shape
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
