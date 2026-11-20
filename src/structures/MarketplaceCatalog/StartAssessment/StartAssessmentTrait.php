<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\StartAssessment;

trait StartAssessmentTrait
{
    /**
     * @param StartAssessmentRequest $args
     * @return StartAssessmentResponse
     */
    public function startAssessment(StartAssessmentRequest $args)
    {
        $result = parent::startAssessment($args->toArray());
        return new StartAssessmentResponse($result->toArray());
    }
}
