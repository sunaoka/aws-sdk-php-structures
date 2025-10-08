<?php

namespace Sunaoka\Aws\Structures\Inspector\CreateAssessmentTarget;

trait CreateAssessmentTargetTrait
{
    /**
     * @param CreateAssessmentTargetRequest $args
     * @return CreateAssessmentTargetResponse
     */
    public function createAssessmentTarget(CreateAssessmentTargetRequest $args)
    {
        $result = parent::createAssessmentTarget($args->toArray());
        return new CreateAssessmentTargetResponse($result->toArray());
    }
}
