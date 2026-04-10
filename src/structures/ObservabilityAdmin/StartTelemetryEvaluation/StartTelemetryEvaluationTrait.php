<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\StartTelemetryEvaluation;

trait StartTelemetryEvaluationTrait
{
    /**
     * @param StartTelemetryEvaluationRequest $args
     * @return void
     */
    public function startTelemetryEvaluation(StartTelemetryEvaluationRequest $args)
    {
        parent::startTelemetryEvaluation($args->toArray());
    }
}
