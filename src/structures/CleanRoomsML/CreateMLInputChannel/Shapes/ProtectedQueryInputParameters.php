<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateMLInputChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedQuerySQLParameters $sqlParameters
 * @property ComputeConfiguration|null $computeConfiguration
 */
class ProtectedQueryInputParameters extends Shape
{
    /**
     * @param array{
     *     sqlParameters: ProtectedQuerySQLParameters,
     *     computeConfiguration?: ComputeConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
