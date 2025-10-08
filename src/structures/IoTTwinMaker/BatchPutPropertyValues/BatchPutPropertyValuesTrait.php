<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\BatchPutPropertyValues;

trait BatchPutPropertyValuesTrait
{
    /**
     * @param BatchPutPropertyValuesRequest $args
     * @return BatchPutPropertyValuesResponse
     */
    public function batchPutPropertyValues(BatchPutPropertyValuesRequest $args)
    {
        $result = parent::batchPutPropertyValues($args->toArray());
        return new BatchPutPropertyValuesResponse($result->toArray());
    }
}
