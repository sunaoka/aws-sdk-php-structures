<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateTelemetryRule;

trait UpdateTelemetryRuleTrait
{
    /**
     * @param UpdateTelemetryRuleRequest $args
     * @return UpdateTelemetryRuleResponse
     */
    public function updateTelemetryRule(UpdateTelemetryRuleRequest $args)
    {
        $result = parent::updateTelemetryRule($args->toArray());
        return new UpdateTelemetryRuleResponse($result->toArray());
    }
}
