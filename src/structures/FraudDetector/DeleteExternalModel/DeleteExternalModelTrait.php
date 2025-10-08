<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteExternalModel;

trait DeleteExternalModelTrait
{
    /**
     * @param DeleteExternalModelRequest $args
     * @return DeleteExternalModelResponse
     */
    public function deleteExternalModel(DeleteExternalModelRequest $args)
    {
        $result = parent::deleteExternalModel($args->toArray());
        return new DeleteExternalModelResponse($result->toArray());
    }
}
