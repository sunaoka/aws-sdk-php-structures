<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $Name
 * @property string|null $Type
 */
class Column extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Name?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
