<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateDetectorModel;

trait CreateDetectorModelTrait
{
    /**
     * @param CreateDetectorModelRequest $args
     * @return CreateDetectorModelResponse
     */
    public function createDetectorModel(CreateDetectorModelRequest $args)
    {
        $result = parent::createDetectorModel($args->toArray());
        return new CreateDetectorModelResponse($result->toArray());
    }
}
