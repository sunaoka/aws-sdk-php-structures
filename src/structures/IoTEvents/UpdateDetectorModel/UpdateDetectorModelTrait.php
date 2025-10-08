<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateDetectorModel;

trait UpdateDetectorModelTrait
{
    /**
     * @param UpdateDetectorModelRequest $args
     * @return UpdateDetectorModelResponse
     */
    public function updateDetectorModel(UpdateDetectorModelRequest $args)
    {
        $result = parent::updateDetectorModel($args->toArray());
        return new UpdateDetectorModelResponse($result->toArray());
    }
}
