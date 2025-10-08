<?php

namespace Sunaoka\Aws\Structures\kendra\SubmitFeedback;

trait SubmitFeedbackTrait
{
    /**
     * @param SubmitFeedbackRequest $args
     * @return void
     */
    public function submitFeedback(SubmitFeedbackRequest $args)
    {
        parent::submitFeedback($args->toArray());
    }
}
