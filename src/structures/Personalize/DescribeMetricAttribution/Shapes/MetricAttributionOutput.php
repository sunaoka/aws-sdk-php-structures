<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeMetricAttribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DataConfig $s3DataDestination
 * @property string $roleArn
 */
class MetricAttributionOutput extends Shape
{
    /**
     * @param array{
     *     s3DataDestination?: S3DataConfig,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
