<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ConnectionName
 * @property string $ConnectorName
 * @property string $ConnectionType
 * @property string $ConnectionTable
 * @property string $SchemaName
 * @property list<GlueSchema> $OutputSchemas
 */
class AthenaConnectorSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     ConnectionName: string,
     *     ConnectorName: string,
     *     ConnectionType: string,
     *     ConnectionTable?: string,
     *     SchemaName: string,
     *     OutputSchemas?: list<GlueSchema>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
