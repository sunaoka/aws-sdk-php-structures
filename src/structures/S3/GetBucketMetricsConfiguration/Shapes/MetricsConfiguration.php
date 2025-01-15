<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketMetricsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property MetricsFilter|null $Filter
 */
class MetricsConfiguration extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Filter?: MetricsFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
