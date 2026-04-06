<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeScraperLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroupArn
 */
class CloudWatchLogDestination extends Shape
{
    /**
     * @param array{logGroupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
