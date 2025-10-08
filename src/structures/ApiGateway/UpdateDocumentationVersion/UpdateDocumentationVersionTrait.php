<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateDocumentationVersion;

trait UpdateDocumentationVersionTrait
{
    /**
     * @param UpdateDocumentationVersionRequest $args
     * @return UpdateDocumentationVersionResponse
     */
    public function updateDocumentationVersion(UpdateDocumentationVersionRequest $args)
    {
        $result = parent::updateDocumentationVersion($args->toArray());
        return new UpdateDocumentationVersionResponse($result->toArray());
    }
}
