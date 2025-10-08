<?php

namespace Sunaoka\Aws\Structures\QApps\ImportDocument;

trait ImportDocumentTrait
{
    /**
     * @param ImportDocumentRequest $args
     * @return ImportDocumentResponse
     */
    public function importDocument(ImportDocumentRequest $args)
    {
        $result = parent::importDocument($args->toArray());
        return new ImportDocumentResponse($result->toArray());
    }
}
