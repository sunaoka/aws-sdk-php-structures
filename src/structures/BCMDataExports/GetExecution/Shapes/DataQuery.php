<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\GetExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueryStatement
 * @property array<string, array<string, string>> $TableConfigurations
 */
class DataQuery extends Shape
{
    /**
     * @param array{
     *     QueryStatement: string,
     *     TableConfigurations?: array<string, array<string, string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
