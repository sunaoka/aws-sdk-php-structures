<?php

namespace Sunaoka\Aws\Structures\GameSparks;

class GameSparksClient extends \Aws\GameSparks\GameSparksClient
{
    use CreateGame\CreateGameTrait;
    use CreateSnapshot\CreateSnapshotTrait;
    use CreateStage\CreateStageTrait;
    use DeleteGame\DeleteGameTrait;
    use DeleteStage\DeleteStageTrait;
    use DisconnectPlayer\DisconnectPlayerTrait;
    use ExportSnapshot\ExportSnapshotTrait;
    use GetExtension\GetExtensionTrait;
    use GetExtensionVersion\GetExtensionVersionTrait;
    use GetGame\GetGameTrait;
    use GetGameConfiguration\GetGameConfigurationTrait;
    use GetGeneratedCodeJob\GetGeneratedCodeJobTrait;
    use GetPlayerConnectionStatus\GetPlayerConnectionStatusTrait;
    use GetSnapshot\GetSnapshotTrait;
    use GetStage\GetStageTrait;
    use GetStageDeployment\GetStageDeploymentTrait;
    use ImportGameConfiguration\ImportGameConfigurationTrait;
    use ListExtensionVersions\ListExtensionVersionsTrait;
    use ListExtensions\ListExtensionsTrait;
    use ListGames\ListGamesTrait;
    use ListGeneratedCodeJobs\ListGeneratedCodeJobsTrait;
    use ListSnapshots\ListSnapshotsTrait;
    use ListStageDeployments\ListStageDeploymentsTrait;
    use ListStages\ListStagesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartGeneratedCodeJob\StartGeneratedCodeJobTrait;
    use StartStageDeployment\StartStageDeploymentTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateGame\UpdateGameTrait;
    use UpdateGameConfiguration\UpdateGameConfigurationTrait;
    use UpdateSnapshot\UpdateSnapshotTrait;
    use UpdateStage\UpdateStageTrait;
}
