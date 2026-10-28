<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListOnDemandScans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scanId
 * @property string $resourceId
 * @property 'AMI' $resourceType
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED' $scanStatus
 * @property 'ACCESS_DENIED'|'INTERNAL_ERROR'|'STORAGE_LIMIT_EXCEEDED'|'EXTRACTION_COLLECTION_TIME_LIMIT_EXCEEDED'|'UNSUPPORTED_OS'|'RESOURCE_TERMINATED'|null $scanStatusReason
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 */
class OnDemandScan extends Shape
{
    /**
     * @param array{
     *     scanId: string,
     *     resourceId: string,
     *     resourceType: 'AMI',
     *     scanStatus: 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED',
     *     scanStatusReason?: 'ACCESS_DENIED'|'INTERNAL_ERROR'|'STORAGE_LIMIT_EXCEEDED'|'EXTRACTION_COLLECTION_TIME_LIMIT_EXCEEDED'|'UNSUPPORTED_OS'|'RESOURCE_TERMINATED'|null,
     *     startedAt: \Aws\Api\DateTimeResult,
     *     completedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
