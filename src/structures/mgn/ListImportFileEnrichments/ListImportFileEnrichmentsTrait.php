<?php

namespace Sunaoka\Aws\Structures\mgn\ListImportFileEnrichments;

trait ListImportFileEnrichmentsTrait
{
    /**
     * @param ListImportFileEnrichmentsRequest $args
     * @return ListImportFileEnrichmentsResponse
     */
    public function listImportFileEnrichments(ListImportFileEnrichmentsRequest $args)
    {
        $result = parent::listImportFileEnrichments($args->toArray());
        return new ListImportFileEnrichmentsResponse($result->toArray());
    }
}
