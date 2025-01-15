<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateScene;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $sceneId
 * @property string $contentLocation
 * @property string|null $description
 * @property list<string>|null $capabilities
 * @property array<string, string>|null $tags
 * @property array<string, string>|null $sceneMetadata
 */
class CreateSceneRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     sceneId: string,
     *     contentLocation: string,
     *     description?: string|null,
     *     capabilities?: list<string>|null,
     *     tags?: array<string, string>|null,
     *     sceneMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
