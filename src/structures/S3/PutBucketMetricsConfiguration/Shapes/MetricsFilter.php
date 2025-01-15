<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketMetricsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Prefix
 * @property Tag|null $Tag
 * @property string|null $AccessPointArn
 * @property MetricsAndOperator|null $And
 */
class MetricsFilter extends Shape
{
    /**
     * @param array{
     *     Prefix?: string|null,
     *     Tag?: Tag|null,
     *     AccessPointArn?: string|null,
     *     And?: MetricsAndOperator|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
