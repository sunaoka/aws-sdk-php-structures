<?php

namespace Sunaoka\Aws\Structures\Braket;

class BraketClient extends \Aws\Braket\BraketClient
{
    use CancelJob\CancelJobTrait;
    use CancelQuantumTask\CancelQuantumTaskTrait;
    use CreateJob\CreateJobTrait;
    use CreateQuantumTask\CreateQuantumTaskTrait;
    use GetDevice\GetDeviceTrait;
    use GetJob\GetJobTrait;
    use GetQuantumTask\GetQuantumTaskTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use SearchDevices\SearchDevicesTrait;
    use SearchJobs\SearchJobsTrait;
    use SearchQuantumTasks\SearchQuantumTasksTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
