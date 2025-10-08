<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DeleteDetectorModel;

trait DeleteDetectorModelTrait
{
    /**
     * @param DeleteDetectorModelRequest $args
     * @return DeleteDetectorModelResponse
     */
    public function deleteDetectorModel(DeleteDetectorModelRequest $args)
    {
        $result = parent::deleteDetectorModel($args->toArray());
        return new DeleteDetectorModelResponse($result->toArray());
    }
}
