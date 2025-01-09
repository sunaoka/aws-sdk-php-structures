<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessmentFrameworkShareRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SENT'|'RECEIVED' $requestType
 * @property string $nextToken
 * @property int<1, 1000> $maxResults
 */
class ListAssessmentFrameworkShareRequestsRequest extends Request
{
    /**
     * @param array{
     *     requestType: 'SENT'|'RECEIVED',
     *     nextToken?: string,
     *     maxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
