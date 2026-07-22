<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListScrapers\Shapes;

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
