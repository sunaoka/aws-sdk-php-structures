<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Database
 * @property string $Table
 * @property string $ConnectionName
 * @property 'sqlserver'|'mysql'|'oracle'|'postgresql'|'redshift' $ConnectionType
 * @property string|null $RedshiftTmpDir
 */
class DirectJDBCSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Database: string,
     *     Table: string,
     *     ConnectionName: string,
     *     ConnectionType: 'sqlserver'|'mysql'|'oracle'|'postgresql'|'redshift',
     *     RedshiftTmpDir?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
