<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetSourceRepositoryCloneUrls;

trait GetSourceRepositoryCloneUrlsTrait
{
    /**
     * @param GetSourceRepositoryCloneUrlsRequest $args
     * @return GetSourceRepositoryCloneUrlsResponse
     */
    public function getSourceRepositoryCloneUrls(GetSourceRepositoryCloneUrlsRequest $args)
    {
        $result = parent::getSourceRepositoryCloneUrls($args->toArray());
        return new GetSourceRepositoryCloneUrlsResponse($result->toArray());
    }
}
