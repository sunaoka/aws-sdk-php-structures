<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetMLInputChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedQuerySQLParameters $sqlParameters
 * @property ComputeConfiguration $computeConfiguration
 */
class ProtectedQueryInputParameters extends Shape
{
    /**
     * @param array{
     *     sqlParameters: ProtectedQuerySQLParameters,
     *     computeConfiguration?: ComputeConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
