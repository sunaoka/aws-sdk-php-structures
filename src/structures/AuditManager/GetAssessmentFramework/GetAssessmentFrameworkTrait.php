<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetAssessmentFramework;

trait GetAssessmentFrameworkTrait
{
    /**
     * @param GetAssessmentFrameworkRequest $args
     * @return GetAssessmentFrameworkResponse
     */
    public function getAssessmentFramework(GetAssessmentFrameworkRequest $args)
    {
        $result = parent::getAssessmentFramework($args->toArray());
        return new GetAssessmentFrameworkResponse($result->toArray());
    }
}
