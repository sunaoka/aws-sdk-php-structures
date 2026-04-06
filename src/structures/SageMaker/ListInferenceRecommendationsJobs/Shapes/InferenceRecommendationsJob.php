<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceRecommendationsJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobName
 * @property string $JobDescription
 * @property 'Default'|'Advanced' $JobType
 * @property string $JobArn
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED'|'DELETING'|'DELETED' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property string $RoleArn
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string|null $FailureReason
 * @property string|null $ModelName
 * @property string|null $SamplePayloadUrl
 * @property string|null $ModelPackageVersionArn
 */
class InferenceRecommendationsJob extends Shape
{
    /**
     * @param array{
     *     JobName: string,
     *     JobDescription: string,
     *     JobType: 'Default'|'Advanced',
     *     JobArn: string,
     *     Status: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED'|'DELETING'|'DELETED',
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     CompletionTime?: \Aws\Api\DateTimeResult|null,
     *     RoleArn: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     FailureReason?: string|null,
     *     ModelName?: string|null,
     *     SamplePayloadUrl?: string|null,
     *     ModelPackageVersionArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
