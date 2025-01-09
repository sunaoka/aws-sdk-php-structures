<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property list<Mapping> $Mapping
 */
class ApplyMapping extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     Mapping: list<Mapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
