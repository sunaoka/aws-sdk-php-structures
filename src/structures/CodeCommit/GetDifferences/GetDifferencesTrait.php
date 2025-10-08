<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetDifferences;

trait GetDifferencesTrait
{
    /**
     * @param GetDifferencesRequest $args
     * @return GetDifferencesResponse
     */
    public function getDifferences(GetDifferencesRequest $args)
    {
        $result = parent::getDifferences($args->toArray());
        return new GetDifferencesResponse($result->toArray());
    }
}
