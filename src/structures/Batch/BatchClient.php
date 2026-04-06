<?php

namespace Sunaoka\Aws\Structures\Batch;

class BatchClient extends \Aws\Batch\BatchClient
{
    use CancelJob\CancelJobTrait;
    use CreateComputeEnvironment\CreateComputeEnvironmentTrait;
    use CreateConsumableResource\CreateConsumableResourceTrait;
    use CreateJobQueue\CreateJobQueueTrait;
    use CreateQuotaShare\CreateQuotaShareTrait;
    use CreateSchedulingPolicy\CreateSchedulingPolicyTrait;
    use CreateServiceEnvironment\CreateServiceEnvironmentTrait;
    use DeleteComputeEnvironment\DeleteComputeEnvironmentTrait;
    use DeleteConsumableResource\DeleteConsumableResourceTrait;
    use DeleteJobQueue\DeleteJobQueueTrait;
    use DeleteQuotaShare\DeleteQuotaShareTrait;
    use DeleteSchedulingPolicy\DeleteSchedulingPolicyTrait;
    use DeleteServiceEnvironment\DeleteServiceEnvironmentTrait;
    use DeregisterJobDefinition\DeregisterJobDefinitionTrait;
    use DescribeComputeEnvironments\DescribeComputeEnvironmentsTrait;
    use DescribeConsumableResource\DescribeConsumableResourceTrait;
    use DescribeJobDefinitions\DescribeJobDefinitionsTrait;
    use DescribeJobQueues\DescribeJobQueuesTrait;
    use DescribeJobs\DescribeJobsTrait;
    use DescribeQuotaShare\DescribeQuotaShareTrait;
    use DescribeSchedulingPolicies\DescribeSchedulingPoliciesTrait;
    use DescribeServiceEnvironments\DescribeServiceEnvironmentsTrait;
    use DescribeServiceJob\DescribeServiceJobTrait;
    use GetJobQueueSnapshot\GetJobQueueSnapshotTrait;
    use ListConsumableResources\ListConsumableResourcesTrait;
    use ListJobs\ListJobsTrait;
    use ListJobsByConsumableResource\ListJobsByConsumableResourceTrait;
    use ListQuotaShares\ListQuotaSharesTrait;
    use ListSchedulingPolicies\ListSchedulingPoliciesTrait;
    use ListServiceJobs\ListServiceJobsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RegisterJobDefinition\RegisterJobDefinitionTrait;
    use SubmitJob\SubmitJobTrait;
    use SubmitServiceJob\SubmitServiceJobTrait;
    use TagResource\TagResourceTrait;
    use TerminateJob\TerminateJobTrait;
    use TerminateServiceJob\TerminateServiceJobTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateComputeEnvironment\UpdateComputeEnvironmentTrait;
    use UpdateConsumableResource\UpdateConsumableResourceTrait;
    use UpdateJobQueue\UpdateJobQueueTrait;
    use UpdateQuotaShare\UpdateQuotaShareTrait;
    use UpdateSchedulingPolicy\UpdateSchedulingPolicyTrait;
    use UpdateServiceEnvironment\UpdateServiceEnvironmentTrait;
    use UpdateServiceJob\UpdateServiceJobTrait;
}
