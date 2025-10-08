<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteEntityType;

trait DeleteEntityTypeTrait
{
    /**
     * @param DeleteEntityTypeRequest $args
     * @return DeleteEntityTypeResponse
     */
    public function deleteEntityType(DeleteEntityTypeRequest $args)
    {
        $result = parent::deleteEntityType($args->toArray());
        return new DeleteEntityTypeResponse($result->toArray());
    }
}
