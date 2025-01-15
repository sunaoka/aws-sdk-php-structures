<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RDS_AURORA_MYSQL'|'RDS_AURORA_POSTGRESQL'|'RDS_MYSQL'|'RDS_POSTGRESQL' $DatabaseEngineType
 * @property ConnectionConfiguration $ConnectionConfiguration
 * @property DataSourceVpcConfiguration|null $VpcConfiguration
 * @property ColumnConfiguration $ColumnConfiguration
 * @property AclConfiguration|null $AclConfiguration
 * @property SqlConfiguration|null $SqlConfiguration
 */
class DatabaseConfiguration extends Shape
{
    /**
     * @param array{
     *     DatabaseEngineType: 'RDS_AURORA_MYSQL'|'RDS_AURORA_POSTGRESQL'|'RDS_MYSQL'|'RDS_POSTGRESQL',
     *     ConnectionConfiguration: ConnectionConfiguration,
     *     VpcConfiguration?: DataSourceVpcConfiguration|null,
     *     ColumnConfiguration: ColumnConfiguration,
     *     AclConfiguration?: AclConfiguration|null,
     *     SqlConfiguration?: SqlConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
