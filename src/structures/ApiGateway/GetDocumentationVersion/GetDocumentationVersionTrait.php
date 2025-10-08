<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDocumentationVersion;

trait GetDocumentationVersionTrait
{
    /**
     * @param GetDocumentationVersionRequest $args
     * @return GetDocumentationVersionResponse
     */
    public function getDocumentationVersion(GetDocumentationVersionRequest $args)
    {
        $result = parent::getDocumentationVersion($args->toArray());
        return new GetDocumentationVersionResponse($result->toArray());
    }
}
