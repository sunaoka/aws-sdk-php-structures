<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ElasticIp
 * @property string $Status
 */
class AwsRedshiftClusterElasticIpStatus extends Shape
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
