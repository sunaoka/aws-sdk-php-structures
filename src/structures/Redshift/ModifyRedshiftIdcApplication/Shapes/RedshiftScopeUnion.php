<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyRedshiftIdcApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Connect|null $Connect
 */
class RedshiftScopeUnion extends Shape
{
    /**
     * @param array{Connect?: Connect|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
