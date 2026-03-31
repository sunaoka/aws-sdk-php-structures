<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $findingId
 * @property string $agentSpaceId
 * @property string|null $pentestId
 * @property string|null $pentestJobId
 * @property string|null $name
 * @property 'ACTIVE'|'RESOLVED'|'ACCEPTED'|'FALSE_POSITIVE'|null $status
 * @property string|null $riskType
 * @property 'UNKNOWN'|'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null $riskLevel
 * @property 'FALSE_POSITIVE'|'UNCONFIRMED'|'LOW'|'MEDIUM'|'HIGH'|null $confidence
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class FindingSummary extends Shape
{
    /**
     * @param array{
     *     findingId: string,
     *     agentSpaceId: string,
     *     pentestId?: string|null,
     *     pentestJobId?: string|null,
     *     name?: string|null,
     *     status?: 'ACTIVE'|'RESOLVED'|'ACCEPTED'|'FALSE_POSITIVE'|null,
     *     riskType?: string|null,
     *     riskLevel?: 'UNKNOWN'|'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null,
     *     confidence?: 'FALSE_POSITIVE'|'UNCONFIRMED'|'LOW'|'MEDIUM'|'HIGH'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
