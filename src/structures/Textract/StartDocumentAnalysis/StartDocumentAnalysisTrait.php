<?php

namespace Sunaoka\Aws\Structures\Textract\StartDocumentAnalysis;

trait StartDocumentAnalysisTrait
{
    /**
     * @param StartDocumentAnalysisRequest $args
     * @return StartDocumentAnalysisResponse
     */
    public function startDocumentAnalysis(StartDocumentAnalysisRequest $args)
    {
        $result = parent::startDocumentAnalysis($args->toArray());
        return new StartDocumentAnalysisResponse($result->toArray());
    }
}
