<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RDS_HTTP_ENDPOINT'|null $relationalDatabaseSourceType
 * @property RdsHttpEndpointConfig|null $rdsHttpEndpointConfig
 */
class RelationalDatabaseDataSourceConfig extends Shape
{
    /**
     * @param array{
     *     relationalDatabaseSourceType?: 'RDS_HTTP_ENDPOINT'|null,
     *     rdsHttpEndpointConfig?: RdsHttpEndpointConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
