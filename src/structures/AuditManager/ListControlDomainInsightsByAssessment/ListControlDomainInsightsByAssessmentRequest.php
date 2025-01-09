<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListControlDomainInsightsByAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListControlDomainInsightsByAssessmentRequest extends Request
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
