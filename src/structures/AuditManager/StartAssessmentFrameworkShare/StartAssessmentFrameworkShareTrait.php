<?php

namespace Sunaoka\Aws\Structures\AuditManager\StartAssessmentFrameworkShare;

trait StartAssessmentFrameworkShareTrait
{
    /**
     * @param StartAssessmentFrameworkShareRequest $args
     * @return StartAssessmentFrameworkShareResponse
     */
    public function startAssessmentFrameworkShare(StartAssessmentFrameworkShareRequest $args)
    {
        $result = parent::startAssessmentFrameworkShare($args->toArray());
        return new StartAssessmentFrameworkShareResponse($result->toArray());
    }
}
