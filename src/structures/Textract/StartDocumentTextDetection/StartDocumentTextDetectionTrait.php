<?php

namespace Sunaoka\Aws\Structures\Textract\StartDocumentTextDetection;

trait StartDocumentTextDetectionTrait
{
    /**
     * @param StartDocumentTextDetectionRequest $args
     * @return StartDocumentTextDetectionResponse
     */
    public function startDocumentTextDetection(StartDocumentTextDetectionRequest $args)
    {
        $result = parent::startDocumentTextDetection($args->toArray());
        return new StartDocumentTextDetectionResponse($result->toArray());
    }
}
