<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDocumentationVersions;

trait GetDocumentationVersionsTrait
{
    /**
     * @param GetDocumentationVersionsRequest $args
     * @return GetDocumentationVersionsResponse
     */
    public function getDocumentationVersions(GetDocumentationVersionsRequest $args)
    {
        $result = parent::getDocumentationVersions($args->toArray());
        return new GetDocumentationVersionsResponse($result->toArray());
    }
}
