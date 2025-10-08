<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutEventType;

trait PutEventTypeTrait
{
    /**
     * @param PutEventTypeRequest $args
     * @return PutEventTypeResponse
     */
    public function putEventType(PutEventTypeRequest $args)
    {
        $result = parent::putEventType($args->toArray());
        return new PutEventTypeResponse($result->toArray());
    }
}
