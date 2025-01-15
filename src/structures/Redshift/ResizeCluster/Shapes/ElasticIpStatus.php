<?php

namespace Sunaoka\Aws\Structures\Redshift\ResizeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ElasticIp
 * @property string|null $Status
 */
class ElasticIpStatus extends Shape
{
    /**
     * @param array{
     *     ElasticIp?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
