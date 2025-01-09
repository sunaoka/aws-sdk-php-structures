<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property 'ALL'|'DISTINCT' $UnionType
 */
class Union extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     UnionType: 'ALL'|'DISTINCT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
