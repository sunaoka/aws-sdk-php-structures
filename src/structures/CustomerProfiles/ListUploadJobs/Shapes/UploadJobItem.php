<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListUploadJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobId
 * @property string|null $DisplayName
 * @property 'CREATED'|'IN_PROGRESS'|'PARTIALLY_SUCCEEDED'|'SUCCEEDED'|'FAILED'|'STOPPED'|null $Status
 * @property 'VALIDATION_FAILURE'|'INTERNAL_FAILURE'|null $StatusReason
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $CompletedAt
 * @property int<1, 1098>|null $DataExpiry
 */
class UploadJobItem extends Shape
{
    /**
     * @param array{
     *     JobId?: string|null,
     *     DisplayName?: string|null,
     *     Status?: 'CREATED'|'IN_PROGRESS'|'PARTIALLY_SUCCEEDED'|'SUCCEEDED'|'FAILED'|'STOPPED'|null,
     *     StatusReason?: 'VALIDATION_FAILURE'|'INTERNAL_FAILURE'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     CompletedAt?: \Aws\Api\DateTimeResult|null,
     *     DataExpiry?: int<1, 1098>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
