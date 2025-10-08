<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateScene;

trait CreateSceneTrait
{
    /**
     * @param CreateSceneRequest $args
     * @return CreateSceneResponse
     */
    public function createScene(CreateSceneRequest $args)
    {
        $result = parent::createScene($args->toArray());
        return new CreateSceneResponse($result->toArray());
    }
}
