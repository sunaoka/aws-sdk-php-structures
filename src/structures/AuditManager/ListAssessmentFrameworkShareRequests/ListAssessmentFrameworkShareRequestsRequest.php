<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessmentFrameworkShareRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SENT'|'RECEIVED' $requestType
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class ListAssessmentFrameworkShareRequestsRequest extends Request
{
    /**
     * @param array{
     *     requestType: 'SENT'|'RECEIVED',
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
