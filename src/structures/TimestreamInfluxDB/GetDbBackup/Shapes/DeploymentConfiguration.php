<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InfluxDBv3EnterpriseDeploymentConfiguration|null $InfluxDBv3Enterprise
 */
class DeploymentConfiguration extends Shape
{
    /**
     * @param array{InfluxDBv3Enterprise?: InfluxDBv3EnterpriseDeploymentConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
