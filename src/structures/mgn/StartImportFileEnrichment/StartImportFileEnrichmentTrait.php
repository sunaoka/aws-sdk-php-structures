<?php

namespace Sunaoka\Aws\Structures\mgn\StartImportFileEnrichment;

trait StartImportFileEnrichmentTrait
{
    /**
     * @param StartImportFileEnrichmentRequest $args
     * @return StartImportFileEnrichmentResponse
     */
    public function startImportFileEnrichment(StartImportFileEnrichmentRequest $args)
    {
        $result = parent::startImportFileEnrichment($args->toArray());
        return new StartImportFileEnrichmentResponse($result->toArray());
    }
}
