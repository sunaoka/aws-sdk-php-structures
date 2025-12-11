<?php

namespace Sunaoka\Aws\Structures\Connect\ImportWorkspaceMedia;

trait ImportWorkspaceMediaTrait
{
    /**
     * @param ImportWorkspaceMediaRequest $args
     * @return ImportWorkspaceMediaResponse
     */
    public function importWorkspaceMedia(ImportWorkspaceMediaRequest $args)
    {
        $result = parent::importWorkspaceMedia($args->toArray());
        return new ImportWorkspaceMediaResponse($result->toArray());
    }
}
