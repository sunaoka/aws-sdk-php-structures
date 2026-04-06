<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane;

class IoTJobsDataPlaneClient extends \Aws\IoTJobsDataPlane\IoTJobsDataPlaneClient
{
    use DescribeJobExecution\DescribeJobExecutionTrait;
    use GetPendingJobExecutions\GetPendingJobExecutionsTrait;
    use StartNextPendingJobExecution\StartNextPendingJobExecutionTrait;
    use UpdateJobExecution\UpdateJobExecutionTrait;
}
