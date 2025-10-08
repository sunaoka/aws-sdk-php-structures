<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ExportMetadataModelAssessment;

trait ExportMetadataModelAssessmentTrait
{
    /**
     * @param ExportMetadataModelAssessmentRequest $args
     * @return ExportMetadataModelAssessmentResponse
     */
    public function exportMetadataModelAssessment(ExportMetadataModelAssessmentRequest $args)
    {
        $result = parent::exportMetadataModelAssessment($args->toArray());
        return new ExportMetadataModelAssessmentResponse($result->toArray());
    }
}
