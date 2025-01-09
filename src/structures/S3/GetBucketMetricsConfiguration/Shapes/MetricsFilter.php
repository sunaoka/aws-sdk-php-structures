<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketMetricsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property Tag $Tag
 * @property string $AccessPointArn
 * @property MetricsAndOperator $And
 */
class MetricsFilter extends Shape
{
    /**
     * @param array{
     *     Prefix?: string,
     *     Tag?: Tag,
     *     AccessPointArn?: string,
     *     And?: MetricsAndOperator
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
