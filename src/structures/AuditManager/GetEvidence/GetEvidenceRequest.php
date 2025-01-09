<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidence;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 * @property string $controlSetId
 * @property string $evidenceFolderId
 * @property string $evidenceId
 */
class GetEvidenceRequest extends Request
{
    /**
     * @param array{
     *     assessmentId: string,
     *     controlSetId: string,
     *     evidenceFolderId: string,
     *     evidenceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
