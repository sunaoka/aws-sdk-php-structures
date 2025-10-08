<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteAppAssessment;

trait DeleteAppAssessmentTrait
{
    /**
     * @param DeleteAppAssessmentRequest $args
     * @return DeleteAppAssessmentResponse
     */
    public function deleteAppAssessment(DeleteAppAssessmentRequest $args)
    {
        $result = parent::deleteAppAssessment($args->toArray());
        return new DeleteAppAssessmentResponse($result->toArray());
    }
}
