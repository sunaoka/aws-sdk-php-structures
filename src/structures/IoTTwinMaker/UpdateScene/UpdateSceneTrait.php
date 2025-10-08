<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateScene;

trait UpdateSceneTrait
{
    /**
     * @param UpdateSceneRequest $args
     * @return UpdateSceneResponse
     */
    public function updateScene(UpdateSceneRequest $args)
    {
        $result = parent::updateScene($args->toArray());
        return new UpdateSceneResponse($result->toArray());
    }
}
