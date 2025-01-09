<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketMetricsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property list<Tag> $Tags
 * @property string $AccessPointArn
 */
class MetricsAndOperator extends Shape
{
    /**
     * @param array{
     *     Prefix?: string,
     *     Tags?: list<Tag>,
     *     AccessPointArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
