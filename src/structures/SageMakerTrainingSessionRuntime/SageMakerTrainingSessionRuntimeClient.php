<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime;

class SageMakerTrainingSessionRuntimeClient extends \Aws\SageMakerTrainingSessionRuntime\SageMakerTrainingSessionRuntimeClient
{
    use ExecuteSamplingOperation\ExecuteSamplingOperationTrait;
    use ExecuteTrainingOperation\ExecuteTrainingOperationTrait;
    use GetSamplingOperationResult\GetSamplingOperationResultTrait;
    use GetTrainingOperationResult\GetTrainingOperationResultTrait;
    use SampleTrainingSession\SampleTrainingSessionTrait;
    use SampleTrainingSessionWithResponseStream\SampleTrainingSessionWithResponseStreamTrait;
}
