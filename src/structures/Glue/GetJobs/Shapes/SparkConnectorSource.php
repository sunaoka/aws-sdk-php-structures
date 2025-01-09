<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ConnectionName
 * @property string $ConnectorName
 * @property string $ConnectionType
 * @property array<string, string> $AdditionalOptions
 * @property list<GlueSchema> $OutputSchemas
 */
class SparkConnectorSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
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
