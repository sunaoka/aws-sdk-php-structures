<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutExternalModel;

trait PutExternalModelTrait
{
    /**
     * @param PutExternalModelRequest $args
     * @return PutExternalModelResponse
     */
    public function putExternalModel(PutExternalModelRequest $args)
    {
        $result = parent::putExternalModel($args->toArray());
        return new PutExternalModelResponse($result->toArray());
    }
}
