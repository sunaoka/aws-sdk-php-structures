<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateScene;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $sceneId
 * @property string|null $contentLocation
 * @property string|null $description
 * @property list<string>|null $capabilities
 * @property array<string, string>|null $sceneMetadata
 */
class UpdateSceneRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     sceneId: string,
     *     contentLocation?: string|null,
     *     description?: string|null,
     *     capabilities?: list<string>|null,
     *     sceneMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
