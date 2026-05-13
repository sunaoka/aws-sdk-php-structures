<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetCodeReviewJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $codeReviewJobId
 * @property string|null $codeReviewId
 * @property string|null $title
 * @property string|null $overview
 * @property 'IN_PROGRESS'|'STOPPING'|'STOPPED'|'FAILED'|'COMPLETED'|null $status
 * @property list<DocumentInfo>|null $documents
 * @property list<SourceCodeRepository>|null $sourceCode
 * @property list<Step>|null $steps
 * @property list<ExecutionContext>|null $executionContext
 * @property string|null $serviceRole
 * @property CloudWatchLog|null $logConfig
 * @property ErrorInformation|null $errorInformation
 * @property list<IntegratedRepository>|null $integratedRepositories
 * @property 'AUTOMATIC'|'DISABLED'|null $codeRemediationStrategy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class CodeReviewJob extends Shape
{
    /**
     * @param array{
     *     codeReviewJobId?: string|null,
     *     codeReviewId?: string|null,
     *     title?: string|null,
     *     overview?: string|null,
     *     status?: 'IN_PROGRESS'|'STOPPING'|'STOPPED'|'FAILED'|'COMPLETED'|null,
     *     documents?: list<DocumentInfo>|null,
     *     sourceCode?: list<SourceCodeRepository>|null,
     *     steps?: list<Step>|null,
     *     executionContext?: list<ExecutionContext>|null,
     *     serviceRole?: string|null,
     *     logConfig?: CloudWatchLog|null,
     *     errorInformation?: ErrorInformation|null,
     *     integratedRepositories?: list<IntegratedRepository>|null,
     *     codeRemediationStrategy?: 'AUTOMATIC'|'DISABLED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
