<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessmentFrameworkShareRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SENT'|'RECEIVED' $requestType
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAssessmentFrameworkShareRequestsRequest extends Request
{
    /**
     * @param array{
     *     requestType: 'SENT'|'RECEIVED',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
