<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetOutcomes;

trait GetOutcomesTrait
{
    /**
     * @param GetOutcomesRequest $args
     * @return GetOutcomesResponse
     */
    public function getOutcomes(GetOutcomesRequest $args)
    {
        $result = parent::getOutcomes($args->toArray());
        return new GetOutcomesResponse($result->toArray());
    }
}
