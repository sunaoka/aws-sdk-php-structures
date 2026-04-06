<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\DescribeRecommendationExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobId
 * @property ExportDestination|null $destination
 * @property 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'Idle'|null $resourceType
 * @property 'Queued'|'InProgress'|'Complete'|'Failed'|null $status
 * @property \Aws\Api\DateTimeResult|null $creationTimestamp
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTimestamp
 * @property string|null $failureReason
 */
class RecommendationExportJob extends Shape
{
    /**
     * @param array{
     *     jobId?: string|null,
     *     destination?: ExportDestination|null,
     *     resourceType?: 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'Idle'|null,
     *     status?: 'Queued'|'InProgress'|'Complete'|'Failed'|null,
     *     creationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     failureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
