<?php

namespace Sunaoka\Aws\Structures\WorkDocs\RestoreDocumentVersions;

trait RestoreDocumentVersionsTrait
{
    /**
     * @param RestoreDocumentVersionsRequest $args
     * @return void
     */
    public function restoreDocumentVersions(RestoreDocumentVersionsRequest $args)
    {
        parent::restoreDocumentVersions($args->toArray());
    }
}
