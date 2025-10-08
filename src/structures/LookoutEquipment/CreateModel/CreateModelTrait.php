<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateModel;

trait CreateModelTrait
{
    /**
     * @param CreateModelRequest $args
     * @return CreateModelResponse
     */
    public function createModel(CreateModelRequest $args)
    {
        $result = parent::createModel($args->toArray());
        return new CreateModelResponse($result->toArray());
    }
}
