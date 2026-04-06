<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $findingId
 * @property string $agentSpaceId
 * @property string|null $pentestId
 * @property string|null $pentestJobId
 * @property string|null $taskId
 * @property string|null $name
 * @property string|null $description
 * @property 'ACTIVE'|'RESOLVED'|'ACCEPTED'|'FALSE_POSITIVE'|null $status
 * @property string|null $riskType
 * @property 'UNKNOWN'|'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null $riskLevel
 * @property string|null $riskScore
 * @property string|null $reasoning
 * @property 'FALSE_POSITIVE'|'UNCONFIRMED'|'LOW'|'MEDIUM'|'HIGH'|null $confidence
 * @property string|null $attackScript
 * @property CodeRemediationTask|null $codeRemediationTask
 * @property string|null $lastUpdatedBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class Finding extends Shape
{
    /**
     * @param array{
     *     findingId: string,
     *     agentSpaceId: string,
     *     pentestId?: string|null,
     *     pentestJobId?: string|null,
     *     taskId?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     status?: 'ACTIVE'|'RESOLVED'|'ACCEPTED'|'FALSE_POSITIVE'|null,
     *     riskType?: string|null,
     *     riskLevel?: 'UNKNOWN'|'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null,
     *     riskScore?: string|null,
     *     reasoning?: string|null,
     *     confidence?: 'FALSE_POSITIVE'|'UNCONFIRMED'|'LOW'|'MEDIUM'|'HIGH'|null,
     *     attackScript?: string|null,
     *     codeRemediationTask?: CodeRemediationTask|null,
     *     lastUpdatedBy?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
