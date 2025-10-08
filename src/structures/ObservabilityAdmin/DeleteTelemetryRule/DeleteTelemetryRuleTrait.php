<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\DeleteTelemetryRule;

trait DeleteTelemetryRuleTrait
{
    /**
     * @param DeleteTelemetryRuleRequest $args
     * @return void
     */
    public function deleteTelemetryRule(DeleteTelemetryRuleRequest $args)
    {
        parent::deleteTelemetryRule($args->toArray());
    }
}
