<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\BatchCreateRumMetricDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorCode
 * @property string $ErrorMessage
 * @property MetricDefinitionRequest $MetricDefinition
 */
class BatchCreateRumMetricDefinitionsError extends Shape
{
    /**
     * @param array{
     *     ErrorCode: string,
     *     ErrorMessage: string,
     *     MetricDefinition: MetricDefinitionRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
