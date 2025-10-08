<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetUploadJobPath;

trait GetUploadJobPathTrait
{
    /**
     * @param GetUploadJobPathRequest $args
     * @return GetUploadJobPathResponse
     */
    public function getUploadJobPath(GetUploadJobPathRequest $args)
    {
        $result = parent::getUploadJobPath($args->toArray());
        return new GetUploadJobPathResponse($result->toArray());
    }
}
