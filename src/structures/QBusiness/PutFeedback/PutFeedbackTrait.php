<?php

namespace Sunaoka\Aws\Structures\QBusiness\PutFeedback;

trait PutFeedbackTrait
{
    /**
     * @param PutFeedbackRequest $args
     * @return void
     */
    public function putFeedback(PutFeedbackRequest $args)
    {
        parent::putFeedback($args->toArray());
    }
}
