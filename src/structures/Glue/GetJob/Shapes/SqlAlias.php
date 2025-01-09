<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $From
 * @property string $Alias
 */
class SqlAlias extends Shape
{
    /**
     * @param array{
     *     From: string,
     *     Alias: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
