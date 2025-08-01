<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Database
 * @property string $Table
 * @property bool|null $PitrEnabled
 * @property DDBELTCatalogAdditionalOptions|null $AdditionalOptions
 */
class DynamoDBCatalogSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Database: string,
     *     Table: string,
     *     PitrEnabled?: bool|null,
     *     AdditionalOptions?: DDBELTCatalogAdditionalOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
