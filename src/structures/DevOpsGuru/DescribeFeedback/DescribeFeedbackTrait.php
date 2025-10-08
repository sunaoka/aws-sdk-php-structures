<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeFeedback;

trait DescribeFeedbackTrait
{
    /**
     * @param DescribeFeedbackRequest $args
     * @return DescribeFeedbackResponse
     */
    public function describeFeedback(DescribeFeedbackRequest $args)
    {
        $result = parent::describeFeedback($args->toArray());
        return new DescribeFeedbackResponse($result->toArray());
    }
}
