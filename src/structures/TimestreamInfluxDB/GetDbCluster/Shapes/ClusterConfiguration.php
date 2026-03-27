<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ingestQueryInstances
 * @property int|null $queryOnlyInstances
 * @property bool|null $dedicatedCompactor
 */
class ClusterConfiguration extends Shape
{
    /**
     * @param array{
     *     ingestQueryInstances?: int|null,
     *     queryOnlyInstances?: int|null,
     *     dedicatedCompactor?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
