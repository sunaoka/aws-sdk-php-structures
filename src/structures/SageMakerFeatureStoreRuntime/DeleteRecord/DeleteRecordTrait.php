<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\DeleteRecord;

trait DeleteRecordTrait
{
    /**
     * @param DeleteRecordRequest $args
     * @return void
     */
    public function deleteRecord(DeleteRecordRequest $args)
    {
        parent::deleteRecord($args->toArray());
    }
}
