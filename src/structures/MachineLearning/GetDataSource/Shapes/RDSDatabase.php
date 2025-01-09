<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceIdentifier
 * @property string $DatabaseName
 */
class RDSDatabase extends Shape
{
    /**
     * @param array{
     *     InstanceIdentifier: string,
     *     DatabaseName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
