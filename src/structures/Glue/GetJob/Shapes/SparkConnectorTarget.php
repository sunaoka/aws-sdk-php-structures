<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property string $ConnectionName
 * @property string $ConnectorName
 * @property string $ConnectionType
 * @property array<string, string> $AdditionalOptions
 * @property list<GlueSchema> $OutputSchemas
 */
class SparkConnectorTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     ConnectionName: string,
     *     ConnectorName: string,
     *     ConnectionType: string,
     *     AdditionalOptions?: array<string, string>,
     *     OutputSchemas?: list<GlueSchema>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
