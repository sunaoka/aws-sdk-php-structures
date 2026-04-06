<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateFinding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $findingId
 * @property string $agentSpaceId
 * @property 'UNKNOWN'|'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null $riskLevel
 * @property 'ACTIVE'|'RESOLVED'|'ACCEPTED'|'FALSE_POSITIVE'|null $status
 */
class UpdateFindingRequest extends Request
{
    /**
     * @param array{
     *     findingId: string,
     *     agentSpaceId: string,
     *     riskLevel?: 'UNKNOWN'|'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null,
     *     status?: 'ACTIVE'|'RESOLVED'|'ACCEPTED'|'FALSE_POSITIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
