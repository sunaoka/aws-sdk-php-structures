<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetDocumentVersion;

trait GetDocumentVersionTrait
{
    /**
     * @param GetDocumentVersionRequest $args
     * @return GetDocumentVersionResponse
     */
    public function getDocumentVersion(GetDocumentVersionRequest $args)
    {
        $result = parent::getDocumentVersion($args->toArray());
        return new GetDocumentVersionResponse($result->toArray());
    }
}
