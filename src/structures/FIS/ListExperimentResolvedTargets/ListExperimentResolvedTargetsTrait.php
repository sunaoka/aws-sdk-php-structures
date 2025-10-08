<?php

namespace Sunaoka\Aws\Structures\FIS\ListExperimentResolvedTargets;

trait ListExperimentResolvedTargetsTrait
{
    /**
     * @param ListExperimentResolvedTargetsRequest $args
     * @return ListExperimentResolvedTargetsResponse
     */
    public function listExperimentResolvedTargets(ListExperimentResolvedTargetsRequest $args)
    {
        $result = parent::listExperimentResolvedTargets($args->toArray());
        return new ListExperimentResolvedTargetsResponse($result->toArray());
    }
}
