<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidenceByEvidenceFolder;

trait GetEvidenceByEvidenceFolderTrait
{
    /**
     * @param GetEvidenceByEvidenceFolderRequest $args
     * @return GetEvidenceByEvidenceFolderResponse
     */
    public function getEvidenceByEvidenceFolder(GetEvidenceByEvidenceFolderRequest $args)
    {
        $result = parent::getEvidenceByEvidenceFolder($args->toArray());
        return new GetEvidenceByEvidenceFolderResponse($result->toArray());
    }
}
