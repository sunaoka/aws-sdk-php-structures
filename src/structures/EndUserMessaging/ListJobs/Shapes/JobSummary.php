<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property 'SUCCESS'|'PROCESSING'|'FAILED' $status
 * @property string $operationType
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $brandProfileId
 * @property string|null $errorCode
 * @property string|null $errorMessage
 * @property list<JobResource>|null $resources
 */
class JobSummary extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     status: 'SUCCESS'|'PROCESSING'|'FAILED',
     *     operationType: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     brandProfileId?: string|null,
     *     errorCode?: string|null,
     *     errorMessage?: string|null,
     *     resources?: list<JobResource>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
