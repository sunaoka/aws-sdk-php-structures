<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessmentFramework;

trait CreateAssessmentFrameworkTrait
{
    /**
     * @param CreateAssessmentFrameworkRequest $args
     * @return CreateAssessmentFrameworkResponse
     */
    public function createAssessmentFramework(CreateAssessmentFrameworkRequest $args)
    {
        $result = parent::createAssessmentFramework($args->toArray());
        return new CreateAssessmentFrameworkResponse($result->toArray());
    }
}
