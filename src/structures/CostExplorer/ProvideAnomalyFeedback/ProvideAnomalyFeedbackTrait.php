<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ProvideAnomalyFeedback;

trait ProvideAnomalyFeedbackTrait
{
    /**
     * @param ProvideAnomalyFeedbackRequest $args
     * @return ProvideAnomalyFeedbackResponse
     */
    public function provideAnomalyFeedback(ProvideAnomalyFeedbackRequest $args)
    {
        $result = parent::provideAnomalyFeedback($args->toArray());
        return new ProvideAnomalyFeedbackResponse($result->toArray());
    }
}
