<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeDocument;

trait AnalyzeDocumentTrait
{
    /**
     * @param AnalyzeDocumentRequest $args
     * @return AnalyzeDocumentResponse
     */
    public function analyzeDocument(AnalyzeDocumentRequest $args)
    {
        $result = parent::analyzeDocument($args->toArray());
        return new AnalyzeDocumentResponse($result->toArray());
    }
}
