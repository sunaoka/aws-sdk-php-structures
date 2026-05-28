<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $systemArn
 * @property string|null $userJourneyId
 * @property string|null $ouId
 * @property string|null $accountId
 * @property 'NOT_STARTED'|'PENDING'|'IN_PROGRESS'|'FAILED'|'SUCCESS'|null $assessmentStatus
 * @property string|null $policyArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListServicesRequest extends Request
{
    /**
     * @param array{
     *     systemArn?: string|null,
     *     userJourneyId?: string|null,
     *     ouId?: string|null,
     *     accountId?: string|null,
     *     assessmentStatus?: 'NOT_STARTED'|'PENDING'|'IN_PROGRESS'|'FAILED'|'SUCCESS'|null,
     *     policyArn?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
