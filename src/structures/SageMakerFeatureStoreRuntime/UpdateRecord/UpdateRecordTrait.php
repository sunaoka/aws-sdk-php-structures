<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\UpdateRecord;

trait UpdateRecordTrait
{
    /**
     * @param UpdateRecordRequest $args
     * @return void
     */
    public function updateRecord(UpdateRecordRequest $args)
    {
        parent::updateRecord($args->toArray());
    }
}
