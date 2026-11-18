<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateQuestionSet;

trait CreateQuestionSetTrait
{
    /**
     * @param CreateQuestionSetRequest $args
     * @return CreateQuestionSetResponse
     */
    public function createQuestionSet(CreateQuestionSetRequest $args)
    {
        $result = parent::createQuestionSet($args->toArray());
        return new CreateQuestionSetResponse($result->toArray());
    }
}
