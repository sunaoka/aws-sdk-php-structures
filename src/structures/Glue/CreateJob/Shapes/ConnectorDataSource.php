<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ConnectionType
 * @property array<string, string> $Data
 * @property list<GlueSchema>|null $OutputSchemas
 */
class ConnectorDataSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     ConnectionType: string,
     *     Data: array<string, string>,
     *     OutputSchemas?: list<GlueSchema>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
