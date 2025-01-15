<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeElasticIps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ip
 * @property string|null $Name
 * @property string|null $Domain
 * @property string|null $Region
 * @property string|null $InstanceId
 */
class ElasticIp extends Shape
{
    /**
     * @param array{
     *     Ip?: string|null,
     *     Name?: string|null,
     *     Domain?: string|null,
     *     Region?: string|null,
     *     InstanceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
