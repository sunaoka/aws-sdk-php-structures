<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateDataSourceFromRedshift\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseName
 * @property string $ClusterIdentifier
 */
class RedshiftDatabase extends Shape
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     ClusterIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
