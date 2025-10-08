<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteContactEvaluation;

trait DeleteContactEvaluationTrait
{
    /**
     * @param DeleteContactEvaluationRequest $args
     * @return void
     */
    public function deleteContactEvaluation(DeleteContactEvaluationRequest $args)
    {
        parent::deleteContactEvaluation($args->toArray());
    }
}
