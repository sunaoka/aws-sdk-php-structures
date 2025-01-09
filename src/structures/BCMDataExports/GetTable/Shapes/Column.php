<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $Name
 * @property string $Type
 */
class Column extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     Name?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
