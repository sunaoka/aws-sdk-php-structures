<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property string $SqlQuery
 * @property list<SqlAlias> $SqlAliases
 * @property list<GlueSchema> $OutputSchemas
 */
class SparkSQL extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     SqlQuery: string,
     *     SqlAliases: list<SqlAlias>,
     *     OutputSchemas?: list<GlueSchema>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
