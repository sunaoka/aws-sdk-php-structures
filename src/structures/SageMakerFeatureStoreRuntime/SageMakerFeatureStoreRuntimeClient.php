<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime;

class SageMakerFeatureStoreRuntimeClient extends \Aws\SageMakerFeatureStoreRuntime\SageMakerFeatureStoreRuntimeClient
{
    use BatchGetRecord\BatchGetRecordTrait;
    use DeleteRecord\DeleteRecordTrait;
    use GetRecord\GetRecordTrait;
    use PutRecord\PutRecordTrait;
}
