<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListScenes;

trait ListScenesTrait
{
    /**
     * @param ListScenesRequest $args
     * @return ListScenesResponse
     */
    public function listScenes(ListScenesRequest $args)
    {
        $result = parent::listScenes($args->toArray());
        return new ListScenesResponse($result->toArray());
    }
}
