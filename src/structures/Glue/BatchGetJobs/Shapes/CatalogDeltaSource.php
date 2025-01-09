<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Database
 * @property string $Table
 * @property array<string, string> $AdditionalDeltaOptions
 * @property list<GlueSchema> $OutputSchemas
 */
class CatalogDeltaSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Database: string,
     *     Table: string,
     *     AdditionalDeltaOptions?: array<string, string>,
     *     OutputSchemas?: list<GlueSchema>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
