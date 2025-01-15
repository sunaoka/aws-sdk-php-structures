<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ConnectionName
 * @property string $ConnectorName
 * @property string $ConnectionType
 * @property string|null $ConnectionTable
 * @property string $SchemaName
 * @property list<GlueSchema>|null $OutputSchemas
 */
class AthenaConnectorSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     ConnectionName: string,
     *     ConnectorName: string,
     *     ConnectionType: string,
     *     ConnectionTable?: string|null,
     *     SchemaName: string,
     *     OutputSchemas?: list<GlueSchema>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
