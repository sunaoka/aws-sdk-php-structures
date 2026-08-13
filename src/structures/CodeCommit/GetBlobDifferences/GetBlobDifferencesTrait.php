<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetBlobDifferences;

trait GetBlobDifferencesTrait
{
    /**
     * @param GetBlobDifferencesRequest $args
     * @return GetBlobDifferencesResponse
     */
    public function getBlobDifferences(GetBlobDifferencesRequest $args)
    {
        $result = parent::getBlobDifferences($args->toArray());
        return new GetBlobDifferencesResponse($result->toArray());
    }
}
