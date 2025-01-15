<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetScene;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workspaceId
 * @property string $sceneId
 * @property string $contentLocation
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $updateDateTime
 * @property string|null $description
 * @property list<string>|null $capabilities
 * @property array<string, string>|null $sceneMetadata
 * @property array<string, string>|null $generatedSceneMetadata
 * @property Shapes\SceneError|null $error
 */
class GetSceneResponse extends Response
{
}
