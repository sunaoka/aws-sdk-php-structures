<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement;

class SnowDeviceManagementClient extends \Aws\SnowDeviceManagement\SnowDeviceManagementClient
{
    use CancelTask\CancelTaskTrait;
    use CreateTask\CreateTaskTrait;
    use DescribeDevice\DescribeDeviceTrait;
    use DescribeDeviceEc2Instances\DescribeDeviceEc2InstancesTrait;
    use DescribeExecution\DescribeExecutionTrait;
    use DescribeTask\DescribeTaskTrait;
    use ListDeviceResources\ListDeviceResourcesTrait;
    use ListDevices\ListDevicesTrait;
    use ListExecutions\ListExecutionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTasks\ListTasksTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
