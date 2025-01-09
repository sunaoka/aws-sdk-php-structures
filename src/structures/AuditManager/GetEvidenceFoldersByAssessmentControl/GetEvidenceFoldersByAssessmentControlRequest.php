<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidenceFoldersByAssessmentControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 * @property string $controlSetId
 * @property string $controlId
 * @property string $nextToken
 * @property int<1, 1000> $maxResults
 */
class GetEvidenceFoldersByAssessmentControlRequest extends Request
{
    /**
     * @param array{
     *     assessmentId: string,
     *     controlSetId: string,
     *     controlId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
