<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessmentControlInsightsByControlDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $controlDomainId
 * @property string $assessmentId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAssessmentControlInsightsByControlDomainRequest extends Request
{
    /**
     * @param array{
     *     controlDomainId: string,
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
