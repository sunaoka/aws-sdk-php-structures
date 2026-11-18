<?php

namespace Sunaoka\Aws\Structures\ElementalInference\GetQuestionSet;

trait GetQuestionSetTrait
{
    /**
     * @param GetQuestionSetRequest $args
     * @return GetQuestionSetResponse
     */
    public function getQuestionSet(GetQuestionSetRequest $args)
    {
        $result = parent::getQuestionSet($args->toArray());
        return new GetQuestionSetResponse($result->toArray());
    }
}
