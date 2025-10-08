<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\PutRecord;

trait PutRecordTrait
{
    /**
     * @param PutRecordRequest $args
     * @return void
     */
    public function putRecord(PutRecordRequest $args)
    {
        parent::putRecord($args->toArray());
    }
}
