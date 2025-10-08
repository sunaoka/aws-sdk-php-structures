<?php

namespace Sunaoka\Aws\Structures\WorkDocs\UpdateDocumentVersion;

trait UpdateDocumentVersionTrait
{
    /**
     * @param UpdateDocumentVersionRequest $args
     * @return void
     */
    public function updateDocumentVersion(UpdateDocumentVersionRequest $args)
    {
        parent::updateDocumentVersion($args->toArray());
    }
}
