<?php

namespace Sunaoka\Aws\Structures\FIS;

class FISClient extends \Aws\FIS\FISClient
{
    use CreateExperimentTemplate\CreateExperimentTemplateTrait;
    use DeleteExperimentTemplate\DeleteExperimentTemplateTrait;
    use GetAction\GetActionTrait;
    use GetExperiment\GetExperimentTrait;
    use GetExperimentTemplate\GetExperimentTemplateTrait;
    use GetTargetResourceType\GetTargetResourceTypeTrait;
    use ListActions\ListActionsTrait;
    use ListExperimentTemplates\ListExperimentTemplatesTrait;
    use ListExperiments\ListExperimentsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTargetResourceTypes\ListTargetResourceTypesTrait;
    use StartExperiment\StartExperimentTrait;
    use StopExperiment\StopExperimentTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateExperimentTemplate\UpdateExperimentTemplateTrait;
}
