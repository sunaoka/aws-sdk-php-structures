<?php

namespace Sunaoka\Aws\Structures\Redshift\DisableSnapshotCopy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ElasticIp
 * @property string $Status
 */
class ElasticIpStatus extends Shape
{
    /**
     * @param array{
     *     ElasticIp?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
