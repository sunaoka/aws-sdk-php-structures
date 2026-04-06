<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationRulePreviewSummaries;

trait ListAutomationRulePreviewSummariesTrait
{
    /**
     * @param ListAutomationRulePreviewSummariesRequest $args
     * @return ListAutomationRulePreviewSummariesResponse
     */
    public function listAutomationRulePreviewSummaries(ListAutomationRulePreviewSummariesRequest $args)
    {
        $result = parent::listAutomationRulePreviewSummaries($args->toArray());
        return new ListAutomationRulePreviewSummariesResponse($result->toArray());
    }
}
