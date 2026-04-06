<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\CreateExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueryStatement
 * @property array<string, array<string, string>>|null $TableConfigurations
 */
class DataQuery extends Shape
{
    /**
     * @param array{
     *     QueryStatement: string,
     *     TableConfigurations?: array<string, array<string, string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
