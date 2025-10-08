<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DeleteADAssessment;

trait DeleteADAssessmentTrait
{
    /**
     * @param DeleteADAssessmentRequest $args
     * @return DeleteADAssessmentResponse
     */
    public function deleteADAssessment(DeleteADAssessmentRequest $args)
    {
        $result = parent::deleteADAssessment($args->toArray());
        return new DeleteADAssessmentResponse($result->toArray());
    }
}
