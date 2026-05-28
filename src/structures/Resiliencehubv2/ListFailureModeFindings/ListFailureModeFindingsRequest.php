<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListFailureModeFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $severity
 * @property 'SHARED_FATE'|'EXCESSIVE_LOAD'|'EXCESSIVE_LATENCY'|'MISCONFIGURATION_AND_BUGS'|'SINGLE_POINT_OF_FAILURE'|null $failureCategory
 * @property 'OPEN'|'RESOLVED'|'IRRELEVANT'|null $status
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListFailureModeFindingsRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     severity?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     failureCategory?: 'SHARED_FATE'|'EXCESSIVE_LOAD'|'EXCESSIVE_LATENCY'|'MISCONFIGURATION_AND_BUGS'|'SINGLE_POINT_OF_FAILURE'|null,
     *     status?: 'OPEN'|'RESOLVED'|'IRRELEVANT'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
