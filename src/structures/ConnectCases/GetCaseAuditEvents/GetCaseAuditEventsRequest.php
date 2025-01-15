<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseAuditEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property string $domainId
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 */
class GetCaseAuditEventsRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     domainId: string,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
