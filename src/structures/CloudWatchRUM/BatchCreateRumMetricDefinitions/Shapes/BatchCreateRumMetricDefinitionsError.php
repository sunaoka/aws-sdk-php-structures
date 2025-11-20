<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\BatchCreateRumMetricDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetricDefinitionRequest $MetricDefinition
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class BatchCreateRumMetricDefinitionsError extends Shape
{
    /**
     * @param array{
     *     MetricDefinition: MetricDefinitionRequest,
     *     ErrorCode: string,
     *     ErrorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
