<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeSimulation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Unknown'|'PerWorker'|'BySpatialSubdivision'|'ByRequest'|null $Lifecycle
 * @property string|null $Name
 */
class Domain extends Shape
{
    /**
     * @param array{
     *     Lifecycle?: 'Unknown'|'PerWorker'|'BySpatialSubdivision'|'ByRequest'|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
