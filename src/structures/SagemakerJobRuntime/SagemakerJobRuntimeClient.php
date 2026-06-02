<?php

namespace Sunaoka\Aws\Structures\SagemakerJobRuntime;

class SagemakerJobRuntimeClient extends \Aws\SagemakerJobRuntime\SagemakerJobRuntimeClient
{
    use CompleteRollout\CompleteRolloutTrait;
    use Sample\SampleTrait;
    use SampleWithResponseStream\SampleWithResponseStreamTrait;
    use UpdateReward\UpdateRewardTrait;
}
