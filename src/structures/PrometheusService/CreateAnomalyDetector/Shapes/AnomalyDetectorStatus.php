<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateAnomalyDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATION_FAILED'|'UPDATE_FAILED'|'DELETION_FAILED' $statusCode
 * @property string|null $statusReason
 */
class AnomalyDetectorStatus extends Shape
{
    /**
     * @param array{
     *     statusCode: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATION_FAILED'|'UPDATE_FAILED'|'DELETION_FAILED',
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
