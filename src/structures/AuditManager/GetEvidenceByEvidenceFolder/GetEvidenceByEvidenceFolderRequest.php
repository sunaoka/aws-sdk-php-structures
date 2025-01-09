<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidenceByEvidenceFolder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 * @property string $controlSetId
 * @property string $evidenceFolderId
 * @property string $nextToken
 * @property int $maxResults
 */
class GetEvidenceByEvidenceFolderRequest extends Request
{
    /**
     * @param array{
     *     assessmentId: string,
     *     controlSetId: string,
     *     evidenceFolderId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
