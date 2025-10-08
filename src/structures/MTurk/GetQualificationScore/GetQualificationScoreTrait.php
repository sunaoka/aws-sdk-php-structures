<?php

namespace Sunaoka\Aws\Structures\MTurk\GetQualificationScore;

trait GetQualificationScoreTrait
{
    /**
     * @param GetQualificationScoreRequest $args
     * @return GetQualificationScoreResponse
     */
    public function getQualificationScore(GetQualificationScoreRequest $args)
    {
        $result = parent::getQualificationScore($args->toArray());
        return new GetQualificationScoreResponse($result->toArray());
    }
}
