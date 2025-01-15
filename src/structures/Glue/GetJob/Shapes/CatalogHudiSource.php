<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Database
 * @property string $Table
 * @property array<string, string>|null $AdditionalHudiOptions
 * @property list<GlueSchema>|null $OutputSchemas
 */
class CatalogHudiSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Database: string,
     *     Table: string,
     *     AdditionalHudiOptions?: array<string, string>|null,
     *     OutputSchemas?: list<GlueSchema>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
