<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateLibraryItemMetadata;

trait UpdateLibraryItemMetadataTrait
{
    /**
     * @param UpdateLibraryItemMetadataRequest $args
     * @return void
     */
    public function updateLibraryItemMetadata(UpdateLibraryItemMetadataRequest $args)
    {
        parent::updateLibraryItemMetadata($args->toArray());
    }
}
