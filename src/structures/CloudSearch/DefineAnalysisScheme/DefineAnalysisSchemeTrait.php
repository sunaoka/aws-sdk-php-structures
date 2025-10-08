<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DefineAnalysisScheme;

trait DefineAnalysisSchemeTrait
{
    /**
     * @param DefineAnalysisSchemeRequest $args
     * @return DefineAnalysisSchemeResponse
     */
    public function defineAnalysisScheme(DefineAnalysisSchemeRequest $args)
    {
        $result = parent::defineAnalysisScheme($args->toArray());
        return new DefineAnalysisSchemeResponse($result->toArray());
    }
}
