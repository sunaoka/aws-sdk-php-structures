<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $EmitInterval
 * @property bool|null $Enabled
 * @property string|null $S3BucketName
 * @property string|null $S3BucketPrefix
 */
class AwsElbLoadBalancerAccessLog extends Shape
{
    /**
     * @param array{
     *     EmitInterval?: int|null,
     *     Enabled?: bool|null,
     *     S3BucketName?: string|null,
     *     S3BucketPrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
