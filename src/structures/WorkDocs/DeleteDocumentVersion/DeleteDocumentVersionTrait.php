<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteDocumentVersion;

trait DeleteDocumentVersionTrait
{
    /**
     * @param DeleteDocumentVersionRequest $args
     * @return void
     */
    public function deleteDocumentVersion(DeleteDocumentVersionRequest $args)
    {
        parent::deleteDocumentVersion($args->toArray());
    }
}
