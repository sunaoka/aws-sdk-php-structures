<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeElasticIps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Ip
 * @property string $Name
 * @property string $Domain
 * @property string $Region
 * @property string $InstanceId
 */
class ElasticIp extends Shape
{
    /**
     * @param array{
     *     Ip?: string,
     *     Name?: string,
     *     Domain?: string,
     *     Region?: string,
     *     InstanceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
