<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\DeleteScene;

trait DeleteSceneTrait
{
    /**
     * @param DeleteSceneRequest $args
     * @return DeleteSceneResponse
     */
    public function deleteScene(DeleteSceneRequest $args)
    {
        $result = parent::deleteScene($args->toArray());
        return new DeleteSceneResponse($result->toArray());
    }
}
