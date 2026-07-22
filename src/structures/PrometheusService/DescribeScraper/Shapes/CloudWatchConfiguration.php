<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetArn
 */
class CloudWatchConfiguration extends Shape
{
    /**
     * @param array{datasetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
