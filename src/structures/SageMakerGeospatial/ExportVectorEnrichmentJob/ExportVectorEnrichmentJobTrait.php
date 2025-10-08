<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ExportVectorEnrichmentJob;

trait ExportVectorEnrichmentJobTrait
{
    /**
     * @param ExportVectorEnrichmentJobRequest $args
     * @return ExportVectorEnrichmentJobResponse
     */
    public function exportVectorEnrichmentJob(ExportVectorEnrichmentJobRequest $args)
    {
        $result = parent::exportVectorEnrichmentJob($args->toArray());
        return new ExportVectorEnrichmentJobResponse($result->toArray());
    }
}
