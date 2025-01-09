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
 * @property string $description
 * @property list<string> $capabilities
 * @property array<string, string> $sceneMetadata
 * @property array<string, string> $generatedSceneMetadata
 * @property Shapes\SceneError $error
 */
class GetSceneResponse extends Response
{
}
