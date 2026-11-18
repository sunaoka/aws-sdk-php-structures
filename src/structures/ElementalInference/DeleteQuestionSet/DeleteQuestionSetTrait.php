<?php

namespace Sunaoka\Aws\Structures\ElementalInference\DeleteQuestionSet;

trait DeleteQuestionSetTrait
{
    /**
     * @param DeleteQuestionSetRequest $args
     * @return DeleteQuestionSetResponse
     */
    public function deleteQuestionSet(DeleteQuestionSetRequest $args)
    {
        $result = parent::deleteQuestionSet($args->toArray());
        return new DeleteQuestionSetResponse($result->toArray());
    }
}
