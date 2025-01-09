<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RDS_HTTP_ENDPOINT' $relationalDatabaseSourceType
 * @property RdsHttpEndpointConfig $rdsHttpEndpointConfig
 */
class RelationalDatabaseDataSourceConfig extends Shape
{
    /**
     * @param array{
     *     relationalDatabaseSourceType?: 'RDS_HTTP_ENDPOINT',
     *     rdsHttpEndpointConfig?: RdsHttpEndpointConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
