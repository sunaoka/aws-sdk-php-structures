<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListIdentityResolutionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string $JobId
 * @property 'PENDING'|'PREPROCESSING'|'FIND_MATCHING'|'MERGING'|'COMPLETED'|'PARTIAL_SUCCESS'|'FAILED' $Status
 * @property \Aws\Api\DateTimeResult $JobStartTime
 * @property \Aws\Api\DateTimeResult $JobEndTime
 * @property JobStats $JobStats
 * @property ExportingLocation $ExportingLocation
 * @property string $Message
 */
class IdentityResolutionJob extends Shape
{
    /**
     * @param array{
     *     DomainName?: string,
     *     JobId?: string,
     *     Status?: 'PENDING'|'PREPROCESSING'|'FIND_MATCHING'|'MERGING'|'COMPLETED'|'PARTIAL_SUCCESS'|'FAILED',
     *     JobStartTime?: \Aws\Api\DateTimeResult,
     *     JobEndTime?: \Aws\Api\DateTimeResult,
     *     JobStats?: JobStats,
     *     ExportingLocation?: ExportingLocation,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
