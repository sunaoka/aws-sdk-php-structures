<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetThreatModelJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $threatModelJobId
 * @property string|null $threatModelId
 * @property string|null $agentSpaceId
 * @property string|null $title
 * @property 'IN_PROGRESS'|'STOPPING'|'STOPPED'|'FAILED'|'COMPLETED'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property \Aws\Api\DateTimeResult|null $executionStartTime
 * @property \Aws\Api\DateTimeResult|null $executionEndTime
 * @property list<SourceCodeRepository>|null $sourceCode
 * @property list<IntegratedRepository>|null $integratedRepositories
 * @property list<DocumentInfo>|null $documents
 * @property list<DocumentInfo>|null $scopeDocs
 * @property ErrorInformation|null $errorInformation
 * @property string|null $systemOverview
 */
class ThreatModelJob extends Shape
{
    /**
     * @param array{
     *     threatModelJobId?: string|null,
     *     threatModelId?: string|null,
     *     agentSpaceId?: string|null,
     *     title?: string|null,
     *     status?: 'IN_PROGRESS'|'STOPPING'|'STOPPED'|'FAILED'|'COMPLETED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     executionStartTime?: \Aws\Api\DateTimeResult|null,
     *     executionEndTime?: \Aws\Api\DateTimeResult|null,
     *     sourceCode?: list<SourceCodeRepository>|null,
     *     integratedRepositories?: list<IntegratedRepository>|null,
     *     documents?: list<DocumentInfo>|null,
     *     scopeDocs?: list<DocumentInfo>|null,
     *     errorInformation?: ErrorInformation|null,
     *     systemOverview?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
