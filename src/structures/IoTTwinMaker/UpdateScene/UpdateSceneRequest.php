<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateScene;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $sceneId
 * @property string $contentLocation
 * @property string $description
 * @property list<string> $capabilities
 * @property array<string, string> $sceneMetadata
 */
class UpdateSceneRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     sceneId: string,
     *     contentLocation?: string,
     *     description?: string,
     *     capabilities?: list<string>,
     *     sceneMetadata?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
