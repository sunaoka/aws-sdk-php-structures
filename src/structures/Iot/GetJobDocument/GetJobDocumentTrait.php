<?php

namespace Sunaoka\Aws\Structures\Iot\GetJobDocument;

trait GetJobDocumentTrait
{
    /**
     * @param GetJobDocumentRequest $args
     * @return GetJobDocumentResponse
     */
    public function getJobDocument(GetJobDocumentRequest $args)
    {
        $result = parent::getJobDocument($args->toArray());
        return new GetJobDocumentResponse($result->toArray());
    }
}
