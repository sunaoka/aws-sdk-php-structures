<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NodeGroup> $nodeGroups
 */
class InfluxDBv3EnterpriseDeploymentConfiguration extends Shape
{
    /**
     * @param array{nodeGroups: list<NodeGroup>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
