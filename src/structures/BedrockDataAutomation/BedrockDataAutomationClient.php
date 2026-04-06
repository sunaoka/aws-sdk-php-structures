<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation;

class BedrockDataAutomationClient extends \Aws\BedrockDataAutomation\BedrockDataAutomationClient
{
    use CopyBlueprintStage\CopyBlueprintStageTrait;
    use CreateBlueprint\CreateBlueprintTrait;
    use CreateBlueprintVersion\CreateBlueprintVersionTrait;
    use CreateDataAutomationLibrary\CreateDataAutomationLibraryTrait;
    use CreateDataAutomationProject\CreateDataAutomationProjectTrait;
    use DeleteBlueprint\DeleteBlueprintTrait;
    use DeleteDataAutomationLibrary\DeleteDataAutomationLibraryTrait;
    use DeleteDataAutomationProject\DeleteDataAutomationProjectTrait;
    use GetBlueprint\GetBlueprintTrait;
    use GetBlueprintOptimizationStatus\GetBlueprintOptimizationStatusTrait;
    use GetDataAutomationLibrary\GetDataAutomationLibraryTrait;
    use GetDataAutomationLibraryEntity\GetDataAutomationLibraryEntityTrait;
    use GetDataAutomationLibraryIngestionJob\GetDataAutomationLibraryIngestionJobTrait;
    use GetDataAutomationProject\GetDataAutomationProjectTrait;
    use InvokeBlueprintOptimizationAsync\InvokeBlueprintOptimizationAsyncTrait;
    use InvokeDataAutomationLibraryIngestionJob\InvokeDataAutomationLibraryIngestionJobTrait;
    use ListBlueprints\ListBlueprintsTrait;
    use ListDataAutomationLibraries\ListDataAutomationLibrariesTrait;
    use ListDataAutomationLibraryEntities\ListDataAutomationLibraryEntitiesTrait;
    use ListDataAutomationLibraryIngestionJobs\ListDataAutomationLibraryIngestionJobsTrait;
    use ListDataAutomationProjects\ListDataAutomationProjectsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateBlueprint\UpdateBlueprintTrait;
    use UpdateDataAutomationLibrary\UpdateDataAutomationLibraryTrait;
    use UpdateDataAutomationProject\UpdateDataAutomationProjectTrait;
}
