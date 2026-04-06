<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListAuditFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceEntity|null $Service
 * @property string|null $Operation
 * @property string|null $MetricType
 */
class ServiceOperationEntity extends Shape
{
    /**
     * @param array{
     *     Service?: ServiceEntity|null,
     *     Operation?: string|null,
     *     MetricType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
