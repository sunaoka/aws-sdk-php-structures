<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\GetRecord;

trait GetRecordTrait
{
    /**
     * @param GetRecordRequest $args
     * @return GetRecordResponse
     */
    public function getRecord(GetRecordRequest $args)
    {
        $result = parent::getRecord($args->toArray());
        return new GetRecordResponse($result->toArray());
    }
}
