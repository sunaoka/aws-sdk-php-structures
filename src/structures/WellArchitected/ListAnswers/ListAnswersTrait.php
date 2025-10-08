<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAnswers;

trait ListAnswersTrait
{
    /**
     * @param ListAnswersRequest $args
     * @return ListAnswersResponse
     */
    public function listAnswers(ListAnswersRequest $args)
    {
        $result = parent::listAnswers($args->toArray());
        return new ListAnswersResponse($result->toArray());
    }
}
