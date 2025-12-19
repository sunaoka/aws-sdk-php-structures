<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation;

class BedrockDataAutomationClient extends \Aws\BedrockDataAutomation\BedrockDataAutomationClient
{
    use CopyBlueprintStage\CopyBlueprintStageTrait;
    use CreateBlueprint\CreateBlueprintTrait;
    use CreateBlueprintVersion\CreateBlueprintVersionTrait;
    use CreateDataAutomationProject\CreateDataAutomationProjectTrait;
    use DeleteBlueprint\DeleteBlueprintTrait;
    use DeleteDataAutomationProject\DeleteDataAutomationProjectTrait;
    use GetBlueprint\GetBlueprintTrait;
    use GetBlueprintOptimizationStatus\GetBlueprintOptimizationStatusTrait;
    use GetDataAutomationProject\GetDataAutomationProjectTrait;
    use InvokeBlueprintOptimizationAsync\InvokeBlueprintOptimizationAsyncTrait;
    use ListBlueprints\ListBlueprintsTrait;
    use ListDataAutomationProjects\ListDataAutomationProjectsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateBlueprint\UpdateBlueprintTrait;
    use UpdateDataAutomationProject\UpdateDataAutomationProjectTrait;
}
