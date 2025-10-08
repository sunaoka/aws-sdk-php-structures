<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListDetectorModels;

trait ListDetectorModelsTrait
{
    /**
     * @param ListDetectorModelsRequest $args
     * @return ListDetectorModelsResponse
     */
    public function listDetectorModels(ListDetectorModelsRequest $args)
    {
        $result = parent::listDetectorModels($args->toArray());
        return new ListDetectorModelsResponse($result->toArray());
    }
}
