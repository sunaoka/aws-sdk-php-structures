<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartMetadataModelAssessment;

trait StartMetadataModelAssessmentTrait
{
    /**
     * @param StartMetadataModelAssessmentRequest $args
     * @return StartMetadataModelAssessmentResponse
     */
    public function startMetadataModelAssessment(StartMetadataModelAssessmentRequest $args)
    {
        $result = parent::startMetadataModelAssessment($args->toArray());
        return new StartMetadataModelAssessmentResponse($result->toArray());
    }
}
