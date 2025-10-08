<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetScene;

trait GetSceneTrait
{
    /**
     * @param GetSceneRequest $args
     * @return GetSceneResponse
     */
    public function getScene(GetSceneRequest $args)
    {
        $result = parent::getScene($args->toArray());
        return new GetSceneResponse($result->toArray());
    }
}
