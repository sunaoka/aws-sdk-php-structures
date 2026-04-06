<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateTelemetryRule;

trait CreateTelemetryRuleTrait
{
    /**
     * @param CreateTelemetryRuleRequest $args
     * @return CreateTelemetryRuleResponse
     */
    public function createTelemetryRule(CreateTelemetryRuleRequest $args)
    {
        $result = parent::createTelemetryRule($args->toArray());
        return new CreateTelemetryRuleResponse($result->toArray());
    }
}
