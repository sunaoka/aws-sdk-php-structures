<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancerAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string|null $S3BucketName
 * @property int|null $EmitInterval
 * @property string|null $S3BucketPrefix
 */
class AccessLog extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     S3BucketName?: string|null,
     *     EmitInterval?: int|null,
     *     S3BucketPrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
