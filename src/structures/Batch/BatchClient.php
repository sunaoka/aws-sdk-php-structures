<?php

namespace Sunaoka\Aws\Structures\Batch;

class BatchClient extends \Aws\Batch\BatchClient
{
    use CancelJob\CancelJobTrait;
    use CreateComputeEnvironment\CreateComputeEnvironmentTrait;
    use CreateJobQueue\CreateJobQueueTrait;
    use CreateSchedulingPolicy\CreateSchedulingPolicyTrait;
    use DeleteComputeEnvironment\DeleteComputeEnvironmentTrait;
    use DeleteJobQueue\DeleteJobQueueTrait;
    use DeleteSchedulingPolicy\DeleteSchedulingPolicyTrait;
    use DeregisterJobDefinition\DeregisterJobDefinitionTrait;
    use DescribeComputeEnvironments\DescribeComputeEnvironmentsTrait;
    use DescribeJobDefinitions\DescribeJobDefinitionsTrait;
    use DescribeJobQueues\DescribeJobQueuesTrait;
    use DescribeJobs\DescribeJobsTrait;
    use DescribeSchedulingPolicies\DescribeSchedulingPoliciesTrait;
    use GetJobQueueSnapshot\GetJobQueueSnapshotTrait;
    use ListJobs\ListJobsTrait;
    use ListSchedulingPolicies\ListSchedulingPoliciesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RegisterJobDefinition\RegisterJobDefinitionTrait;
    use SubmitJob\SubmitJobTrait;
    use TagResource\TagResourceTrait;
    use TerminateJob\TerminateJobTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateComputeEnvironment\UpdateComputeEnvironmentTrait;
    use UpdateJobQueue\UpdateJobQueueTrait;
    use UpdateSchedulingPolicy\UpdateSchedulingPolicyTrait;
}
