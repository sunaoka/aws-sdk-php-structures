<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateAnswer;

trait UpdateAnswerTrait
{
    /**
     * @param UpdateAnswerRequest $args
     * @return UpdateAnswerResponse
     */
    public function updateAnswer(UpdateAnswerRequest $args)
    {
        $result = parent::updateAnswer($args->toArray());
        return new UpdateAnswerResponse($result->toArray());
    }
}
