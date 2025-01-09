<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property string $Database
 * @property string $Table
 */
class OracleSQLCatalogTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     Database: string,
     *     Table: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
