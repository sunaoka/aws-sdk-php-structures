<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancerAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $S3BucketName
 * @property int $EmitInterval
 * @property string $S3BucketPrefix
 */
class AccessLog extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     S3BucketName?: string,
     *     EmitInterval?: int,
     *     S3BucketPrefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
