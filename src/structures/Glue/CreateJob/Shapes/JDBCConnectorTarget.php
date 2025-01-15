<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property string $ConnectionName
 * @property string $ConnectionTable
 * @property string $ConnectorName
 * @property string $ConnectionType
 * @property array<string, string>|null $AdditionalOptions
 * @property list<GlueSchema>|null $OutputSchemas
 */
class JDBCConnectorTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     ConnectionName: string,
     *     ConnectionTable: string,
     *     ConnectorName: string,
     *     ConnectionType: string,
     *     AdditionalOptions?: array<string, string>|null,
     *     OutputSchemas?: list<GlueSchema>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
