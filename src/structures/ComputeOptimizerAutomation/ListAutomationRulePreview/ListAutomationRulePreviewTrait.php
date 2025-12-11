<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationRulePreview;

trait ListAutomationRulePreviewTrait
{
    /**
     * @param ListAutomationRulePreviewRequest $args
     * @return ListAutomationRulePreviewResponse
     */
    public function listAutomationRulePreview(ListAutomationRulePreviewRequest $args)
    {
        $result = parent::listAutomationRulePreview($args->toArray());
        return new ListAutomationRulePreviewResponse($result->toArray());
    }
}
