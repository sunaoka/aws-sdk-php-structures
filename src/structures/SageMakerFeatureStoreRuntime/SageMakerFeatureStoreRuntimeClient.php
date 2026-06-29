<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime;

class SageMakerFeatureStoreRuntimeClient extends \Aws\SageMakerFeatureStoreRuntime\SageMakerFeatureStoreRuntimeClient
{
    use BatchGetRecord\BatchGetRecordTrait;
    use BatchWriteRecord\BatchWriteRecordTrait;
    use DeleteRecord\DeleteRecordTrait;
    use GetRecord\GetRecordTrait;
    use ListRecords\ListRecordsTrait;
    use PutRecord\PutRecordTrait;
}
