<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidenceFolder;

trait GetEvidenceFolderTrait
{
    /**
     * @param GetEvidenceFolderRequest $args
     * @return GetEvidenceFolderResponse
     */
    public function getEvidenceFolder(GetEvidenceFolderRequest $args)
    {
        $result = parent::getEvidenceFolder($args->toArray());
        return new GetEvidenceFolderResponse($result->toArray());
    }
}
