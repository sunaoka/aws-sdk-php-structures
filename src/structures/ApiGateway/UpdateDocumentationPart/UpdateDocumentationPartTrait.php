<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateDocumentationPart;

trait UpdateDocumentationPartTrait
{
    /**
     * @param UpdateDocumentationPartRequest $args
     * @return UpdateDocumentationPartResponse
     */
    public function updateDocumentationPart(UpdateDocumentationPartRequest $args)
    {
        $result = parent::updateDocumentationPart($args->toArray());
        return new UpdateDocumentationPartResponse($result->toArray());
    }
}
