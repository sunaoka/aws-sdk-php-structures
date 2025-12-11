<?php

namespace Sunaoka\Aws\Structures\PrometheusService\PutAnomalyDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $markAsAnomaly
 * @property bool|null $skip
 */
class AnomalyDetectorMissingDataAction extends Shape
{
    /**
     * @param array{
     *     markAsAnomaly?: bool|null,
     *     skip?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
