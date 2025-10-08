<?php

namespace Sunaoka\Aws\Structures\FIS;

class FISClient extends \Aws\FIS\FISClient
{
    use CreateExperimentTemplate\CreateExperimentTemplateTrait;
    use CreateTargetAccountConfiguration\CreateTargetAccountConfigurationTrait;
    use DeleteExperimentTemplate\DeleteExperimentTemplateTrait;
    use DeleteTargetAccountConfiguration\DeleteTargetAccountConfigurationTrait;
    use GetAction\GetActionTrait;
    use GetExperiment\GetExperimentTrait;
    use GetExperimentTargetAccountConfiguration\GetExperimentTargetAccountConfigurationTrait;
    use GetExperimentTemplate\GetExperimentTemplateTrait;
    use GetSafetyLever\GetSafetyLeverTrait;
    use GetTargetAccountConfiguration\GetTargetAccountConfigurationTrait;
    use GetTargetResourceType\GetTargetResourceTypeTrait;
    use ListActions\ListActionsTrait;
    use ListExperimentResolvedTargets\ListExperimentResolvedTargetsTrait;
    use ListExperimentTargetAccountConfigurations\ListExperimentTargetAccountConfigurationsTrait;
    use ListExperimentTemplates\ListExperimentTemplatesTrait;
    use ListExperiments\ListExperimentsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTargetAccountConfigurations\ListTargetAccountConfigurationsTrait;
    use ListTargetResourceTypes\ListTargetResourceTypesTrait;
    use StartExperiment\StartExperimentTrait;
    use StopExperiment\StopExperimentTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateExperimentTemplate\UpdateExperimentTemplateTrait;
    use UpdateSafetyLeverState\UpdateSafetyLeverStateTrait;
    use UpdateTargetAccountConfiguration\UpdateTargetAccountConfigurationTrait;
}
