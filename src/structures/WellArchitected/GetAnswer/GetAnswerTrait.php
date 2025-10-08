<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAnswer;

trait GetAnswerTrait
{
    /**
     * @param GetAnswerRequest $args
     * @return GetAnswerResponse
     */
    public function getAnswer(GetAnswerRequest $args)
    {
        $result = parent::getAnswer($args->toArray());
        return new GetAnswerResponse($result->toArray());
    }
}
