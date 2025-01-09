<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetScene;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $sceneId
 */
class GetSceneRequest extends Request
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
