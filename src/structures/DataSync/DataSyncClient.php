<?php

namespace Sunaoka\Aws\Structures\DataSync;

class DataSyncClient extends \Aws\DataSync\DataSyncClient
{
    use CancelTaskExecution\CancelTaskExecutionTrait;
    use CreateAgent\CreateAgentTrait;
    use CreateLocationAzureBlob\CreateLocationAzureBlobTrait;
    use CreateLocationEfs\CreateLocationEfsTrait;
    use CreateLocationFsxLustre\CreateLocationFsxLustreTrait;
    use CreateLocationFsxOntap\CreateLocationFsxOntapTrait;
    use CreateLocationFsxOpenZfs\CreateLocationFsxOpenZfsTrait;
    use CreateLocationFsxWindows\CreateLocationFsxWindowsTrait;
    use CreateLocationHdfs\CreateLocationHdfsTrait;
    use CreateLocationNfs\CreateLocationNfsTrait;
    use CreateLocationObjectStorage\CreateLocationObjectStorageTrait;
    use CreateLocationS3\CreateLocationS3Trait;
    use CreateLocationSmb\CreateLocationSmbTrait;
    use CreateTask\CreateTaskTrait;
    use DeleteAgent\DeleteAgentTrait;
    use DeleteLocation\DeleteLocationTrait;
    use DeleteTask\DeleteTaskTrait;
    use DescribeAgent\DescribeAgentTrait;
    use DescribeLocationAzureBlob\DescribeLocationAzureBlobTrait;
    use DescribeLocationEfs\DescribeLocationEfsTrait;
    use DescribeLocationFsxLustre\DescribeLocationFsxLustreTrait;
    use DescribeLocationFsxOntap\DescribeLocationFsxOntapTrait;
    use DescribeLocationFsxOpenZfs\DescribeLocationFsxOpenZfsTrait;
    use DescribeLocationFsxWindows\DescribeLocationFsxWindowsTrait;
    use DescribeLocationHdfs\DescribeLocationHdfsTrait;
    use DescribeLocationNfs\DescribeLocationNfsTrait;
    use DescribeLocationObjectStorage\DescribeLocationObjectStorageTrait;
    use DescribeLocationS3\DescribeLocationS3Trait;
    use DescribeLocationSmb\DescribeLocationSmbTrait;
    use DescribeTask\DescribeTaskTrait;
    use DescribeTaskExecution\DescribeTaskExecutionTrait;
    use ListAgents\ListAgentsTrait;
    use ListLocations\ListLocationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTaskExecutions\ListTaskExecutionsTrait;
    use ListTasks\ListTasksTrait;
    use StartTaskExecution\StartTaskExecutionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAgent\UpdateAgentTrait;
    use UpdateLocationAzureBlob\UpdateLocationAzureBlobTrait;
    use UpdateLocationEfs\UpdateLocationEfsTrait;
    use UpdateLocationFsxLustre\UpdateLocationFsxLustreTrait;
    use UpdateLocationFsxOntap\UpdateLocationFsxOntapTrait;
    use UpdateLocationFsxOpenZfs\UpdateLocationFsxOpenZfsTrait;
    use UpdateLocationFsxWindows\UpdateLocationFsxWindowsTrait;
    use UpdateLocationHdfs\UpdateLocationHdfsTrait;
    use UpdateLocationNfs\UpdateLocationNfsTrait;
    use UpdateLocationObjectStorage\UpdateLocationObjectStorageTrait;
    use UpdateLocationS3\UpdateLocationS3Trait;
    use UpdateLocationSmb\UpdateLocationSmbTrait;
    use UpdateTask\UpdateTaskTrait;
    use UpdateTaskExecution\UpdateTaskExecutionTrait;
}
