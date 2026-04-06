<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateMLInputChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedQuerySQLParameters $sqlParameters
 * @property ComputeConfiguration|null $computeConfiguration
 * @property 'CSV'|'PARQUET'|null $resultFormat
 */
class ProtectedQueryInputParameters extends Shape
{
    /**
     * @param array{
     *     sqlParameters: ProtectedQuerySQLParameters,
     *     computeConfiguration?: ComputeConfiguration|null,
     *     resultFormat?: 'CSV'|'PARQUET'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
