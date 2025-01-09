<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetSparqlStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stmt
 */
class SparqlData extends Shape
{
    /**
     * @param array{stmt: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
