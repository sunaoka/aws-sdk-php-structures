<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $maxResults
 * @property string $pentestJobId
 * @property string $agentSpaceId
 * @property string|null $nextToken
 * @property string|null $riskType
 * @property 'UNKNOWN'|'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null $riskLevel
 * @property 'ACTIVE'|'RESOLVED'|'ACCEPTED'|'FALSE_POSITIVE'|null $status
 * @property 'FALSE_POSITIVE'|'UNCONFIRMED'|'LOW'|'MEDIUM'|'HIGH'|null $confidence
 * @property string|null $name
 */
class ListFindingsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int|null,
     *     pentestJobId: string,
     *     agentSpaceId: string,
     *     nextToken?: string|null,
     *     riskType?: string|null,
     *     riskLevel?: 'UNKNOWN'|'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null,
     *     status?: 'ACTIVE'|'RESOLVED'|'ACCEPTED'|'FALSE_POSITIVE'|null,
     *     confidence?: 'FALSE_POSITIVE'|'UNCONFIRMED'|'LOW'|'MEDIUM'|'HIGH'|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
