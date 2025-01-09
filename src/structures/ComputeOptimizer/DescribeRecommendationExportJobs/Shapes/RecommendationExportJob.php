<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\DescribeRecommendationExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property ExportDestination $destination
 * @property 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'Idle' $resourceType
 * @property 'Queued'|'InProgress'|'Complete'|'Failed' $status
 * @property \Aws\Api\DateTimeResult $creationTimestamp
 * @property \Aws\Api\DateTimeResult $lastUpdatedTimestamp
 * @property string $failureReason
 */
class RecommendationExportJob extends Shape
{
    /**
     * @param array{
     *     jobId?: string,
     *     destination?: ExportDestination,
     *     resourceType?: 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'Idle',
     *     status?: 'Queued'|'InProgress'|'Complete'|'Failed',
     *     creationTimestamp?: \Aws\Api\DateTimeResult,
     *     lastUpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     failureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
