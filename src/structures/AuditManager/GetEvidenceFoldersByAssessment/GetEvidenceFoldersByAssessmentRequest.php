<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidenceFoldersByAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 * @property string $nextToken
 * @property int $maxResults
 */
class GetEvidenceFoldersByAssessmentRequest extends Request
{
    /**
     * @param array{
     *     assessmentId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
