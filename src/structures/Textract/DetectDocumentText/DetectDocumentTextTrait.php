<?php

namespace Sunaoka\Aws\Structures\Textract\DetectDocumentText;

trait DetectDocumentTextTrait
{
    /**
     * @param DetectDocumentTextRequest $args
     * @return DetectDocumentTextResponse
     */
    public function detectDocumentText(DetectDocumentTextRequest $args)
    {
        $result = parent::detectDocumentText($args->toArray());
        return new DetectDocumentTextResponse($result->toArray());
    }
}
