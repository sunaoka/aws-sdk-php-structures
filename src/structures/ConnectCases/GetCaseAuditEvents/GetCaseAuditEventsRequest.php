<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseAuditEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property string $domainId
 * @property int $maxResults
 * @property string $nextToken
 */
class GetCaseAuditEventsRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     domainId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
