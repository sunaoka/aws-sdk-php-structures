<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property list<list<string>> $PartitionKeys
 * @property string $Table
 * @property string $Database
 * @property CatalogSchemaChangePolicy $SchemaChangePolicy
 */
class GovernedCatalogTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     PartitionKeys?: list<list<string>>,
     *     Table: string,
     *     Database: string,
     *     SchemaChangePolicy?: CatalogSchemaChangePolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
