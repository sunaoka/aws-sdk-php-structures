<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeSimulation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Unknown'|'PerWorker'|'BySpatialSubdivision'|'ByRequest' $Lifecycle
 * @property string $Name
 */
class Domain extends Shape
{
    /**
     * @param array{
     *     Lifecycle?: 'Unknown'|'PerWorker'|'BySpatialSubdivision'|'ByRequest',
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
