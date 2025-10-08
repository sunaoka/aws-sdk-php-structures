<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidence;

trait GetEvidenceTrait
{
    /**
     * @param GetEvidenceRequest $args
     * @return GetEvidenceResponse
     */
    public function getEvidence(GetEvidenceRequest $args)
    {
        $result = parent::getEvidence($args->toArray());
        return new GetEvidenceResponse($result->toArray());
    }
}
