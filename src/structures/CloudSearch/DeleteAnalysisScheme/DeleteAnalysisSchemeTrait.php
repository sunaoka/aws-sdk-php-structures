<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DeleteAnalysisScheme;

trait DeleteAnalysisSchemeTrait
{
    /**
     * @param DeleteAnalysisSchemeRequest $args
     * @return DeleteAnalysisSchemeResponse
     */
    public function deleteAnalysisScheme(DeleteAnalysisSchemeRequest $args)
    {
        $result = parent::deleteAnalysisScheme($args->toArray());
        return new DeleteAnalysisSchemeResponse($result->toArray());
    }
}
