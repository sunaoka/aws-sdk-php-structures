<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateFinding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $findingId
 * @property string $agentSpaceId
 * @property string|null $name
 * @property string|null $description
 * @property string|null $riskType
 * @property 'UNKNOWN'|'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null $riskLevel
 * @property string|null $riskScore
 * @property string|null $attackScript
 * @property string|null $reasoning
 * @property 'ACTIVE'|'RESOLVED'|'ACCEPTED'|'FALSE_POSITIVE'|null $status
 * @property string|null $customerNote
 */
class UpdateFindingRequest extends Request
{
    /**
     * @param array{
     *     findingId: string,
     *     agentSpaceId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     riskType?: string|null,
     *     riskLevel?: 'UNKNOWN'|'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null,
     *     riskScore?: string|null,
     *     attackScript?: string|null,
     *     reasoning?: string|null,
     *     status?: 'ACTIVE'|'RESOLVED'|'ACCEPTED'|'FALSE_POSITIVE'|null,
     *     customerNote?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
