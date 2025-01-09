<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property int $Index
 */
class SelectFromCollection extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     Index: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
