<?php

namespace Sunaoka\Aws\Structures\Textract\GetDocumentAnalysis;

trait GetDocumentAnalysisTrait
{
    /**
     * @param GetDocumentAnalysisRequest $args
     * @return GetDocumentAnalysisResponse
     */
    public function getDocumentAnalysis(GetDocumentAnalysisRequest $args)
    {
        $result = parent::getDocumentAnalysis($args->toArray());
        return new GetDocumentAnalysisResponse($result->toArray());
    }
}
