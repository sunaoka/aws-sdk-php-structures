<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidenceFoldersByAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class GetEvidenceFoldersByAssessmentRequest extends Request
{
    /**
     * @param array{
     *     assessmentId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
