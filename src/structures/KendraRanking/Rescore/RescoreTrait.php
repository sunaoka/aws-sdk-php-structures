<?php

namespace Sunaoka\Aws\Structures\KendraRanking\Rescore;

trait RescoreTrait
{
    /**
     * @param RescoreRequest $args
     * @return RescoreResponse
     */
    public function rescore(RescoreRequest $args)
    {
        $result = parent::rescore($args->toArray());
        return new RescoreResponse($result->toArray());
    }
}
