<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeID;

trait AnalyzeIDTrait
{
    /**
     * @param AnalyzeIDRequest $args
     * @return AnalyzeIDResponse
     */
    public function analyzeID(AnalyzeIDRequest $args)
    {
        $result = parent::analyzeID($args->toArray());
        return new AnalyzeIDResponse($result->toArray());
    }
}
