<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteEvaluationForm;

trait DeleteEvaluationFormTrait
{
    /**
     * @param DeleteEvaluationFormRequest $args
     * @return void
     */
    public function deleteEvaluationForm(DeleteEvaluationFormRequest $args)
    {
        parent::deleteEvaluationForm($args->toArray());
    }
}
