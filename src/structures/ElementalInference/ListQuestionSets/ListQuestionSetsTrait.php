<?php

namespace Sunaoka\Aws\Structures\ElementalInference\ListQuestionSets;

trait ListQuestionSetsTrait
{
    /**
     * @param ListQuestionSetsRequest $args
     * @return ListQuestionSetsResponse
     */
    public function listQuestionSets(ListQuestionSetsRequest $args)
    {
        $result = parent::listQuestionSets($args->toArray());
        return new ListQuestionSetsResponse($result->toArray());
    }
}
