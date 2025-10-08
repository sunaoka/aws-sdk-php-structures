<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessment;

trait CreateAssessmentTrait
{
    /**
     * @param CreateAssessmentRequest $args
     * @return CreateAssessmentResponse
     */
    public function createAssessment(CreateAssessmentRequest $args)
    {
        $result = parent::createAssessment($args->toArray());
        return new CreateAssessmentResponse($result->toArray());
    }
}
