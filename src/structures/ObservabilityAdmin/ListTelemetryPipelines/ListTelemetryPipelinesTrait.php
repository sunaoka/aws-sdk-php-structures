<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListTelemetryPipelines;

trait ListTelemetryPipelinesTrait
{
    /**
     * @param ListTelemetryPipelinesRequest $args
     * @return ListTelemetryPipelinesResponse
     */
    public function listTelemetryPipelines(ListTelemetryPipelinesRequest $args)
    {
        $result = parent::listTelemetryPipelines($args->toArray());
        return new ListTelemetryPipelinesResponse($result->toArray());
    }
}
