<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HealthMonitoring|null $healthMonitoring
 * @property DeepHealthChecks|null $deepHealthChecks
 */
class UpdateInstanceHealthChecksRequest extends Shape
{
    /**
     * @param array{
     *     healthMonitoring?: HealthMonitoring|null,
     *     deepHealthChecks?: DeepHealthChecks|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
