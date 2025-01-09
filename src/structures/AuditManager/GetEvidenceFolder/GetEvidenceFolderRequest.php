<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidenceFolder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 * @property string $controlSetId
 * @property string $evidenceFolderId
 */
class GetEvidenceFolderRequest extends Request
{
    /**
     * @param array{
     *     assessmentId: string,
     *     controlSetId: string,
     *     evidenceFolderId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
