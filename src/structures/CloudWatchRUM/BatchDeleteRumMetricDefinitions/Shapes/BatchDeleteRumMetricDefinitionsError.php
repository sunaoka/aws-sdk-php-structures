<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\BatchDeleteRumMetricDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorCode
 * @property string $ErrorMessage
 * @property string $MetricDefinitionId
 */
class BatchDeleteRumMetricDefinitionsError extends Shape
{
    /**
     * @param array{
     *     ErrorCode: string,
     *     ErrorMessage: string,
     *     MetricDefinitionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
