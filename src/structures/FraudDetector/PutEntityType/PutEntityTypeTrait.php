<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutEntityType;

trait PutEntityTypeTrait
{
    /**
     * @param PutEntityTypeRequest $args
     * @return PutEntityTypeResponse
     */
    public function putEntityType(PutEntityTypeRequest $args)
    {
        $result = parent::putEntityType($args->toArray());
        return new PutEntityTypeResponse($result->toArray());
    }
}
