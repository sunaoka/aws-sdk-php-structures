<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListTelemetryRules;

trait ListTelemetryRulesTrait
{
    /**
     * @param ListTelemetryRulesRequest $args
     * @return ListTelemetryRulesResponse
     */
    public function listTelemetryRules(ListTelemetryRulesRequest $args)
    {
        $result = parent::listTelemetryRules($args->toArray());
        return new ListTelemetryRulesResponse($result->toArray());
    }
}
