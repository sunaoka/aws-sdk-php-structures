<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\DeleteScene;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $sceneId
 */
class DeleteSceneRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     sceneId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
