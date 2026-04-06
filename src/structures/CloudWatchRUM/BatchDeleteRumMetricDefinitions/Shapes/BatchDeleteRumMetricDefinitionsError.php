<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\BatchDeleteRumMetricDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricDefinitionId
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class BatchDeleteRumMetricDefinitionsError extends Shape
{
    /**
     * @param array{
     *     MetricDefinitionId: string,
     *     ErrorCode: string,
     *     ErrorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
