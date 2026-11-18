<?php

namespace Sunaoka\Aws\Structures\ElementalInference\UpdateQuestionSet;

trait UpdateQuestionSetTrait
{
    /**
     * @param UpdateQuestionSetRequest $args
     * @return UpdateQuestionSetResponse
     */
    public function updateQuestionSet(UpdateQuestionSetRequest $args)
    {
        $result = parent::updateQuestionSet($args->toArray());
        return new UpdateQuestionSetResponse($result->toArray());
    }
}
