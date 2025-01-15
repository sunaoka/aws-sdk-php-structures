<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ElasticIp
 * @property string|null $Status
 */
class AwsRedshiftClusterElasticIpStatus extends Shape
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
