<?php

namespace Sunaoka\Aws\Structures\Textract\GetDocumentTextDetection;

trait GetDocumentTextDetectionTrait
{
    /**
     * @param GetDocumentTextDetectionRequest $args
     * @return GetDocumentTextDetectionResponse
     */
    public function getDocumentTextDetection(GetDocumentTextDetectionRequest $args)
    {
        $result = parent::getDocumentTextDetection($args->toArray());
        return new GetDocumentTextDetectionResponse($result->toArray());
    }
}
