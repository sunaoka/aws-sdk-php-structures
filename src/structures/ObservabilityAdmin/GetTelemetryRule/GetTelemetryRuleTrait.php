<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryRule;

trait GetTelemetryRuleTrait
{
    /**
     * @param GetTelemetryRuleRequest $args
     * @return GetTelemetryRuleResponse
     */
    public function getTelemetryRule(GetTelemetryRuleRequest $args)
    {
        $result = parent::getTelemetryRule($args->toArray());
        return new GetTelemetryRuleResponse($result->toArray());
    }
}
