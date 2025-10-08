<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetDocumentPath;

trait GetDocumentPathTrait
{
    /**
     * @param GetDocumentPathRequest $args
     * @return GetDocumentPathResponse
     */
    public function getDocumentPath(GetDocumentPathRequest $args)
    {
        $result = parent::getDocumentPath($args->toArray());
        return new GetDocumentPathResponse($result->toArray());
    }
}
