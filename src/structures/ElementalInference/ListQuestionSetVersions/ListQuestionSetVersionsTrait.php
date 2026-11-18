<?php

namespace Sunaoka\Aws\Structures\ElementalInference\ListQuestionSetVersions;

trait ListQuestionSetVersionsTrait
{
    /**
     * @param ListQuestionSetVersionsRequest $args
     * @return ListQuestionSetVersionsResponse
     */
    public function listQuestionSetVersions(ListQuestionSetVersionsRequest $args)
    {
        $result = parent::listQuestionSetVersions($args->toArray());
        return new ListQuestionSetVersionsResponse($result->toArray());
    }
}
