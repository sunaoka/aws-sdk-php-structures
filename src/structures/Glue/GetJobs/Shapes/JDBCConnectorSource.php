<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ConnectionName
 * @property string $ConnectorName
 * @property string $ConnectionType
 * @property JDBCConnectorOptions|null $AdditionalOptions
 * @property string|null $ConnectionTable
 * @property string|null $Query
 * @property list<GlueSchema>|null $OutputSchemas
 */
class JDBCConnectorSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     ConnectionName: string,
     *     ConnectorName: string,
     *     ConnectionType: string,
     *     AdditionalOptions?: JDBCConnectorOptions|null,
     *     ConnectionTable?: string|null,
     *     Query?: string|null,
     *     OutputSchemas?: list<GlueSchema>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
