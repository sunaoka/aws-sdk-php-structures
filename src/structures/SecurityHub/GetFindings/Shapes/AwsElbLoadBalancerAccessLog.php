<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $EmitInterval
 * @property bool $Enabled
 * @property string $S3BucketName
 * @property string $S3BucketPrefix
 */
class AwsElbLoadBalancerAccessLog extends Shape
{
    /**
     * @param array{
     *     EmitInterval?: int,
     *     Enabled?: bool,
     *     S3BucketName?: string,
     *     S3BucketPrefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
