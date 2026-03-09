<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Type
 * @property string|null $Description
 */
class Column extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Type?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
